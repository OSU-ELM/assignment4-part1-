<?php
$user = $_POST['username'];
session_start();
if (!isset($_SESSION['User']) && $user == null){
	session_destroy();
	}
else {
	if (!isset($_SESSION['User'])){
	$_SESSION['User'] = $user;
	}
	if (!isset($_SESSION['Visits'])){
	$_SESSION['Visits'] = 0;
	}
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
	<title>Eric Miller assignment4 part 1-3 LINK PAGE 1</title>
  </head>
<body>
	<div>
	<?php if (session_status() !== 2): ?>
    A username must be entered. Click <a href = 'http://web.engr.oregonstate.edu/~millerer/login.php'>here</a> to return to the login screen
	<?php else:?>
	WELCOME! <br> <br>
	<?php
		$_SESSION['Visits']++;
		//idea to add logout status via GET from http://stackoverflow.com/questions/2801490/a-log-out-hyperlink-in-php
		echo "Hello ".$_SESSION['User']."! you have visited this page ".$_SESSION['Visits']." times before. Click <a href = 'http://web.engr.oregonstate.edu/~millerer/login.php?logout=1'>here</a> to return to the login screen and log out.";
	?>
	<form name = "link_form" method = "post" action = "http://web.engr.oregonstate.edu/~millerer/content2.php">
	<input type="submit" value= "Go to Page 2" name= "loggedIn" action = "http://web.engr.oregonstate.edu/~millerer/content2.php">
	</form>
	<?php endif;?>
	</div>
</body>