<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
	<title>Eric Miller assignment4 part 1-3 LINK PAGE 2</title>
  </head>
<body>
	<div>
	<!-- Below picture and code from http://knowyourmeme.com/photos/484302-dark-souls -->
	<?php if (!isset($_SESSION['User'])): ?>
    A username must be entered. Click <a href = 'http://web.engr.oregonstate.edu/~millerer/login.php'>here</a> to return to the login screen
	<?php else:?>
	<img src="http://i3.kym-cdn.com/photos/images/original/000/484/302/b58.jpg" /><br>
	<br><br>You made it to page 2! Praise the sun! <br><br>
	<form name = "post_form" method = "post"action = "http://web.engr.oregonstate.edu/~millerer/content1.php">
	<input type="submit" value= "BACK" name= "loggedIn" method = "post" action = "http://web.engr.oregonstate.edu/~millerer/content1.php">
	<?php endif;?>
	</div>
</body>