<?php
/*$server = 'localhost';
$username = 'root';
$password = 'root';
$database = 'auth';

try{
	$conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch(PDOException $e){
	die( "Connection failed: " . $e->getMessage());
}
*/

$site_title = "Capstone project";
$page_title = "Home page";
$dbc = mysqli_connect('localhost', 'dev', 'lokiuj10!', 'capstone project') OR die('Could not connect because: '.mysqli_connect_error());

?>