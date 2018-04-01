<?php
  // If the user is logged in, delete the session vars to log them out
  session_start();
  if (isset($_SESSION['user_id'])) {
    // Delete the session varables by clearing the $_SESSION array
    $_SESSION = array();

    // Delete the session cookie by setting its expiration to an hour ago (3600)
    if (isset($_COOKIE[session_name()])) {
      setcookie(session_name(), '', time() - 3600);
    }
    session_destroy();
  }

  // Delete the user ID and username cookies by setting their expirations to an hour ago (3600)
  setcookie('user_id', '', time() - 3600);
  setcookie('first_name', '', time() - 3600);     
			// Delete the buffer.
			header("Location:index.php");
			exit(); 
?>


