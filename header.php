<?php
ob_start(); 
  session_start();
  // If the session vars aren't set, try to set them with a cookie
  if (!isset($_SESSION['user_id'])) {
    if (isset($_COOKIE['user_id']) && isset($_COOKIE['first_name'])) {
      $_SESSION['user_id'] = $_COOKIE['user_id'];
      $_SESSION['first_name'] = $_COOKIE['first_name'];
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--
    Author: Funke Makanjuola
    Email: fumakanjuola@gmail.com
   
    This copyright claim and header must be included with any
    distribution of the software and displayed at the bottom of the
    front page in a minimum 11px font size and displayed in readable
    contrast with the front page background.    

    If you would like assistance in setting up or modification of this
    software, feel free to contact the author at: funade01@gmail.com.
    Based upon the amount of assistance requested, there may be a
    fee requested for services provided.
 
    This program is free software: you can redistribute it and/or modify
    it under the terms of the above paragraphs and the GNU General Public
    License as published by the Free Software Foundation, either version
    3 of the License.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.
     </http://www.gnu.org/licenses/>

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
    -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="css/theme.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-dark sticky-top bg-lightpurple flex-md-nowrap p-0">
      <h1 class="navbar-brand col-sm-3 col-md-2 m-0"><a class=" text-white" href="index.php" >FORMPRO</a></h1>
      <h2 class="text-white my-3">Using Forms</h2>
      <div class="pr-5">
      <?php	include('changeloginsignupscript.php')?>     
      </div>
		</nav>