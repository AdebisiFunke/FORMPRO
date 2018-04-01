<?php
 require('mysql.inc.php');
  // If the user isn't logged in, try to log them in
  if (!isset($_SESSION['user_id'])) {
     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     
    
	// Validate the email address:
	if (!empty($_POST['nemail'])) {
		$e = mysqli_real_escape_string ($dbc, $_POST['nemail']);
	} else {
		$e = FALSE;
		echo '<p class="error">You forgot to enter your email address!</p>';
	}

	// Validate the password:
	if (!empty($_POST['pass'])) {
		$p = mysqli_real_escape_string ($dbc, $_POST['pass']);
	} else {
		$p = FALSE;
		echo '<p class="error">You forgot to enter your password!</p>';
	}

	if ($e && $p) { 

		// Query the database:
		$q = "SELECT user_id, first_name FROM Users WHERE (nemail='$e' AND pass=SHA1('$p'))";
		$r = mysqli_query ($dbc, $q) or trigger_error("Query: $q\n<br />MySQL Error: " . mysqli_error($dbc));

         if (mysqli_num_rows($r) == 1) {
          // The log-in is OK so set the user ID,username, cookies and session variables
          $row = mysqli_fetch_array($r);
          $_SESSION['user_id'] = $row['user_id'];
          $_SESSION['first_name'] = $row['first_name'];
          setcookie('user_id', $row['user_id'], time() + (60 * 60 * 24 * 30));    // expires in 30 days
          setcookie('first_name', $row['first_name'], time() + (60 * 60 * 24 * 30));  // expires in 30 days		
			header("Location:index.php");
			$nemail = " ";
			$pass = "";
			exit(); 

		}
        else {
          
          $error_msg = 'Sorry, you must enter a valid username and password to log in.';
        }
      }
      else {
        
        $error_msg = 'Sorry, you must enter your username and password to log in.';
      }
    }
    	mysqli_close($dbc);
  }
?>