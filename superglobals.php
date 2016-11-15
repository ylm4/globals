<!DOCTYPE html>
<html>
<body>
<h3> $_GLOBALS</h3> 
<?php
//$GLOBALS
//references all variables available in global scope

function test() {
	$foo = "local varaible";
	echo '$foo in global scope: ' . $GLOBALS ["foo"] . "\n";
	echo '$foo in curent scope: ' . $foo . "\n";
}
$foo = "Example content";
test();

echo "<br>";
?>

<h3>$_SERVER </h3>
<?php
//$_SERVER
//an array that contains headers, path, & script information.
//it is created by the web server
echo $_SERVER['SERVER_NAME'];

echo "<br>";
?>
<h3>$_GET</h3> 
<?php
//$_GET
//if user inputs in form name, the user's name would appear before "!"
echo 'Hello ' . htmlspecialchars($_GET["username"]) . '!';

echo "<br>";

?>
<h3>$_POST </h3>
<?php
//$_POST
echo 'Hello ' . htmlspecialchars($_POST["name"]) . '!';
echo "<br>";
?>

<h3>$_FILES</h3>
<?php
//$_FILES- array of items uploaded to current script via HTTP POST METHOD

$uploaddir= '/var/www/uploads/';
$uploaddir= $uploaddir . basename($_FILES['userfile']['name']);
echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)){
	echo "File is valid and was successfully upload. \n";
} else {
	echo "File not successfully uploaded \n";
}

echo 'Here is debug info: ';
print_r($_FILES);
print '</pre>';

?>
<h3>$_COOKIE</h3>
<?php
// an associative array of tables passed to the current script
echo 'Hello ' . htmlspecialchars($_COOKIE["name"]) . '!';

?>
<h3>$_SESSION</h3>
<?php
//assoicative array containing session variables availble to the current
//script 
session_start();
$_SESSION["newsession"] = $value;

?>
<h3>$_ENV</h3>
<?php
//associative array of variables passed to curren script via the envir method
echo 'My username is '  .$_ENV["USER"] . '!';
?>

