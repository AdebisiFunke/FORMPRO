<?php
include('header.php');
include("sidesection2.php");?>
<?php
$page_title = 'Your Login Status ';
      if (isset($_SESSION['first_name'])) {
		echo '<div class="text-success font-weight-bold text-uppercase">'. $_SESSION['first_name'].' you are now logged in.'.'<br>'.'<br>'.'</div>';
     }
	  
	  ?>
 
<?php 
echo 'FORMPRO  is a plugin that can be used on any website.'.'<br>'.'<br>'.'<strong>'.'Features'.'</strong>'.'<br>'.'Create user account'.'<br>'.'Login User '.'<br>'.'Reset pasword for user'.'<br>'.
'Logout user'.'<br>'.'<br>'.'<strong>'.'Technology'.'</strong>'.'<br>'.'BootStrap 4.0'.'<br>'.'CSS3'.'<br>'.'HTML5'.'<br>'.'PHP 7.0.26'.'<br>'.'<br>'.'Feel free to download and use on your website ';
?>
<?php include ('footer.php'); ?>

