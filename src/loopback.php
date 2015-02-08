<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
	<title>Eric Miller assignment4 part 1-2</title>
  </head>
<body>
  <form name = "post_form" method = "post" action = "http://web.engr.oregonstate.edu/~millerer/loopback.php">
	<label> TEST POST: </label> 
	<input type = "text" name ="post_text"> <br>
	<input type="submit">
  </form>
    <br><br>
	<div>

	<?php
	class Jobject {
		public $Type= "GET|POST";
		public $parameters ="parameters: null";
	}
	$make_jason = new Jobject;
	$Input = $_SERVER['REQUEST_METHOD']; // Server request method code from Frank Eslami posted on 02/04 in https://oregonstate.instructure.com/courses/1498916/discussion_topics/7521099
	if ($Input == 'GET'){
		$make_jason->Type='GET';
		$make_jason->parameters=array();
		
		foreach ($_GET as $key => $value) { //syntax to get unknown post data from http://stackoverflow.com/questions/3032671/php-getting-content-of-the-post-request
			$make_jason->parameters[]= $key.": ".$value.", ";
		}
		//print_r(array_values($make_jason->parameters));  FOR TESTING
	}
	else if ($Input == 'POST'){
		$make_jason->Type='POST';
		$make_jason->parameters=array();
		
		foreach ($_POST as $key => $value) { //syntax to get unknown post data from http://stackoverflow.com/questions/3032671/php-getting-content-of-the-post-request
			$make_jason->parameters[]= $key.": ".$value.", ";
		}
		//print_r(array_values($make_jason->parameters)); FOR TESTING
	}
	//JSON encoding from http://php.net/manual/en/function.json-encode.php
	echo json_encode($make_jason);
	?>
	</div>
</body>