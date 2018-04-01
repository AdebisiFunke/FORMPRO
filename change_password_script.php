<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	include('mysql.inc.php');
	$errors = array(); 
	if (empty($_POST['nemail'])) {
		$errors[] = 'You forgot to enter your email address.';
	} else {
		$e = mysqli_real_escape_string($dbc, trim($_POST['nemail']));
	}

	if (empty($_POST['pass'])) {
		$errors[] = 'You forgot to enter your current password.';
	} else {
		$p = mysqli_real_escape_string($dbc, trim($_POST['pass']));
	}
	if (!empty($_POST['pass1'])) {
		if ($_POST['pass1'] != $_POST['pass2']) {
			$errors[] = 'Your new password did not match the confirmed password.';
		} else {
			$np = mysqli_real_escape_string($dbc, trim($_POST['pass1']));
		}
	} else {
		$errors[] = 'You forgot to enter your new password.';
	}

	if (empty($errors)) { 

		// Check that they've entered the right email address/password combination
		$q = "SELECT user_id FROM Users WHERE (nemail='$e' AND pass=SHA1('$p') )";
		$r = @mysqli_query($dbc, $q);
		$num = @mysqli_num_rows($r);
		if ($num == 1) { 

			// Get the user_id:
			$row = mysqli_fetch_array($r, MYSQLI_NUM);
			$q = "UPDATE Users SET pass=SHA1('$np') WHERE user_id=$row[0]";
			$r = @mysqli_query($dbc, $q);

			if (mysqli_affected_rows($dbc) == 1) { // If it ran OK.

				// Redirect the user:
		   
			header("Location: loginpage.php");	
			} else { 

				
				echo '
				<p class="error">Your password could not be changed due to a system error. We apologize for any inconvenience!!!</p>';

				echo '<p>' . mysqli_error($dbc) . '<br /><br />Query: ' . $q . '</p>';

			}
			include ('footer.php');
			exit();

		} else { 
			echo '
			<p class="error">The email address and password do not match!!!</p>';
		}

	} else { 

		echo '<p class="error">The following error(s) occurred:<br />';
		foreach ($errors as $msg) { // Print each error.
			echo " - $msg<br />\n";
		}
		echo '</p><p>Please try again.</p><p><br /></p>';

	} 

	mysqli_close($dbc); 
}
?>