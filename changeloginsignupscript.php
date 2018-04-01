<?php
      if (isset($_SESSION['first_name'])) {
		
       echo '<div class="text-white font-weight-bold text-uppercase">&#10048;&#10048; '. $_SESSION['first_name'];
       echo ' &#10048;&#10048;'.' <a href="./logout.php" class="btn btn-primary">'.'Log Out'.'</a>';

   }
  else {
  	//echo '<div class="signP">&#91;'.'<a href="loginpage.php class="btn btn-primary pr-3">'.'Log In or Sign Up'.'</a>'.'&#93;</div></div>';
  	echo '<a href="loginpage.php" class="btn btn-primary mr-3">'.'Login'.'</a>'.'<a href="signup.php" class="btn btn-primary">'.'Signup'.'</a>';
  }
  	?>
  	
	