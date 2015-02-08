<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
	<title>Eric Miller assignment4 part 1-1</title>
  </head>
<body>
    <form name = "get_form" method = "get">
	  <label> Type min. multiplicand: </label> 
	  <input type = "number" name ="min_cand"> <br>
	  <label> Type max multiplicand: </label> 
	  <input type = "number" name ="max_cand"> <br>
	  <label> Type min. multiplier: </label> 
	  <input type = "number" name ="min_multi"> <br>
	  <label> Type max. multiplier: </label>
	  <input type = "number" name ="max_multi"><br><br><br>
	  <p><input type="submit" /></p>
	</form>
    <br><br>
	<div>
<?php

//'Empty' syntax taken from http://stackoverflow.com/questions/3408616/how-to-check-if-get-is-empty
if (empty($_GET['min_multi']) || empty($_GET['max_multi']) || empty($_GET['min_cand']) ||  empty($_GET['max_cand'])){
	echo "ERROR: A FIELD IS BLANK-PLEASE FILL IN ALL FIELDS!<br>";
	if (empty($_GET['min_multi'])){
		echo "-Min. Multiplier is Empty <br>";
	}
	if (empty($_GET['max_multi'])){
		echo "-Max Multiplier is Empty<br>";
	}
	if (empty($_GET['min_cand'])){
		echo "-Min Multiplicand is Empty<br>";
	}
	if (empty($_GET['max_cand'])){
		echo "-Max Multiplicand is Empty<br>";
	}
}
else if ($_GET['min_multi'] > $_GET['max_multi']) {
	echo "ERROR: Max Multiplier is less than min. multiplier!";
}
else if ($_GET['min_cand'] > $_GET['max_cand']) {
	echo "ERROR: Max multiplicand is less than min. multiplicand!";
}	

else {
	echo "ALL PASSED! YAY!";
	$max_multi = $_GET['max_multi'];
	$min_multi = $_GET['min_multi'];
	$min_cand = $_GET['min_cand'];
	$max_cand = $_GET['max_cand'];
	$i = 0; //for loops
	$j = 0; //for loops
	//table set up is from week 5, lecture 4 ('Variables and Arrays in PHP'). White space character '&nbsp' from https://vegdave.wordpress.com/2007/11/01/white-space-character-in-html/
	echo '<p><h2>Multiplication Table</h2><p>
	<table border="1">
	<tr>
	<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp ';
	for ($i = $min_multi; $i < $max_multi+1; $i++){
		echo '<td>'.$i;
	}
	for ($i = $min_cand; $i < $max_cand+1; $i++){
		echo '<tr><td>'.$i;
		for ($j = $min_multi; $j < $max_multi+1; $j++){
			echo '<td>'.($i*$j);
		}
		
	}
}
?>
    </div>
</body>