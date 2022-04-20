<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
echo "Hello World!";

//This is a single-line comment
#This is also a single-line comment

/*
This is a multiple-lines comment block
that spans over multiple-lines
lines
*/


// You can also use comments to leave out parts of a code line
/*$x = 5  +15 +5;
echo $x; 
*/


/*$txt = "Hello world!";
$x = 5;
$y = 10.5;
echo $txt;
echo "<br>";
echo $x;
echo "<br>";
echo $y;
echo "<br>";
*/


/*$x = 5; //global scope
function myTest(){
	echo "<p>Variable x inside function is: $x</p>";
}
myTest();
echo "<p>Variable x outside function is:$x</p>";
 */


/* $x = 5;
$y = 10;
function myTest(){
	global $x, $y;
	$y =$x +$y;
}
myTest();
echo $y; 
*/


/*function myTest(){
	static $x = 0;
	echo $x;
	$x++;
}
myTest();
echo "<br>";
myTest();
echo "<br>";
myTest(); 
*/


/*$a = 5;
$b = 10;
if ($a > $b){
	echo "a is bigger than b";
} elseif ($a == $b) {
	echo "a is equal to b";
} else {
	echo "a is smaller than b";
}
*/


/*$d = date("D");
if($d == "Fri"){
	echo "Have a nice weekend!";
} else {
	echo "Have a nice day!";
}
*/


/* $favcolor = "red";
switch ($favcolor){
	case "red":
		echo "Your favorite color is red!";
		break;
	case "blue":
		echo "Your favorite color is blue!";
		break;
	case "green":
		echo "Your favorite color is green!";
		break;
	default: 
		echo "Your favorite color is neither red, blue, nor green!";
} 
*/


/* $x = 1;
while($x <=5){
	echo "The number is: $x <br>";
	$x++;
} 
*/


/* $x = 1;
do{
	echo "The number is: $x <br>";
	$x++;
}while ($x <=5);
*/


/*for ($x = 0; $x <= 10; $x++){
	echo "The number is: $x <br>";
}
*/


/*$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $value){
	echo "$value <br>";
}
*/
?>
</body>
</html>