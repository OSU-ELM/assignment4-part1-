<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
if (isset($_GET['logout'])){
	session_start();
	session_destroy();
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
	<title>Eric Miller assignment4 part 1-3</title>
  </head>
<body>
  <form name = "post_form" method = "post" action = "http://web.engr.oregonstate.edu/~millerer/content1.php">
	<label> ENTER USER NAME </label> 
	<input type = "text" name ="username"> <br>
	<input type="submit" value= "login" name= "loggedIn" >
  </form>
    <br><br>
	<div>

	<?php
	
	?>
	</div>
</body>