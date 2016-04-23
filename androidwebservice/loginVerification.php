<?php

       $host = "mysql7.000webhost.com";
$user = "a8665086_ttag"; // type username here
$password = "password2016"; //set password here
$database_name = "a8665086_thermal";
    $pdo = new PDO("mysql:host=$host;dbname=$database_name", $user, $password, array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ));
	
$username=$_GET['username'];
$password=$_GET['password'];

$query = $pdo->prepare("select * from user where username LIKE '$username' AND password LIKE '$password'  LIMIT 0, 1 ");
$query->execute();
if($check = $query->fetch()){
	
	echo("Sucess");
} 
else {
	echo("error");
}

?>
