<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	include('mysql.inc.php');
    // Trim - remove whitespaces from both sides of a string:
    $trimmed = array_map('trim', $_POST);
    $error = array();


    // Check for a new  email address and match against retyped new email
    if (filter_var($trimmed['nemail'], FILTER_VALIDATE_EMAIL)) {
        if ($trimmed['nemail'] == $trimmed['remail']) {
            $e = mysqli_real_escape_string($dbc, $trimmed['nemail']);
        } else {
            $error[] = 'Your email did not match the retyped email!';
        }
    } else {
        $error[] = 'Please enter a valid email address!';
    }

    // Check for a password and match against the retyped password
    //password must be btw 4-20 character and must contain only letter, number and underscore.

    if (preg_match('/^\w{4,20}$/', $trimmed['pass'])) {
        if ($trimmed['pass'] == $trimmed['rpass']) {
            $p = mysqli_real_escape_string($dbc, $trimmed['pass']);
        } else {
            $error[] = 'Your password did not match the confirmed password!';
        }
    } else {
        $error[] = 'Please enter a valid password!';
    }

    // validate first name
    //it will contain characters from 2 to 20, only letters,apostrophy, underscore, a period, a dash and a space.
    //The caret , dollar signs are used to to match both the begining and end of string to ensure that the values
    // contain only those characters needed.
    //slash(/) indictaes where pattern starts and ends

    if (preg_match('/^[A-Z \'.-]{2,20}$/i', $trimmed['first_name'])) {
        $fn = mysqli_real_escape_string($dbc, $trimmed['first_name']);
    } else {
        $error[] = 'Please enter a valid first name!';
    }

    // Check for valid last name

    if (preg_match('/^[A-Z \'.-]{2,40}$/i', $trimmed['last_name'])) {
        $ln = mysqli_real_escape_string($dbc, $trimmed['last_name']);
    } else {
        $error[] = 'Please enter a valid last name!';
    }
    // Check for valid telephone number
    //e.g 16626417183
    if (!preg_match('/^([1]-)?[0-9]{3}-[0-9]{3}-[0-9]{4}$/i', $trimmed['tnumber'])) {
        $t = mysqli_real_escape_string($dbc, $trimmed['tnumber']);

    } else {
        $error[] = 'Please enter a valid phone number';
    }

    // Check for valid alternate telephone number:
    if (!preg_match('/^([1]-)?[0-9]{3}-[0-9]{3}-[0-9]{4}$/i', $trimmed['anumber'])) {
        $at = mysqli_real_escape_string($dbc, $trimmed['anumber']);

    } else {
        $error[] = 'Please enter a valid alternate phone number';
    }

    if (!preg_match("/[0-9]{2}\/[0-9]{2}\/[0-9]{4}/", $trimmed['birth_date'])) {
        $bdat = mysqli_real_escape_string($dbc, $trimmed['birth_date']);

    } else {
        $error[] = 'Please enter a valid birth date';
    }

    //strcasecmp make user input case insentitive
    if (empty($error)) { // If form pass every test

        /* search the database to ensure that the email address is unique
		$qs = "SELECT user_id FROM Users WHERE nemail='$e'";
		$r = mysqli_query ($dbc, $qs) or trigger_error("Query: $qs\n<br />MySQL Error: " . mysqli_error($dbc));
*/
        // if email aadress is unique register the user
        if (mysqli_num_rows($r) == 0) { // Available.

            // Add the user to the database:
            $q = "INSERT INTO Users (first_name, last_name, nemail, pass,  tnumber, anumber ,birth_date, registration_date) VALUES ( '$fn', '$ln','$e', SHA1('$p'),'$t', '$at','$bdat', NOW() )";
            $r = mysqli_query($dbc, $q) or trigger_error("Query: $q\n<br />MySQL Error: ".mysqli_error($dbc));

            
            if (mysqli_affected_rows($dbc) == 1) { // If it ran OK.
          
              
            // Confirm success with the user

            header("Location:loginpage.php");
            //mysqli_close($dbc);
            $name = "";
            $nemail = "";
            $pass = "";
            $first_name = "";
            $last_name = "";
            $tnumber = "";
            $anumber = "";
            $birth_date = "";
            $registration_date = "";
         
            exit();
			}


        } else { // The email address is not available.
            echo '<p class="error">That email address has already been registered. If you have forgotten your password, use the link at right to have your password sent to you.</p>';
        }

    } else { //report error
        //echo '<p class="error">The following error(s) occurred:<br />';
        foreach($error as $msg) { // Print each error.
            echo '<div class="error">'.
            " &#8727; $msg".
            '</div>';
        }

    
    }
 mysqli_close($dbc);
}

?>