<?php
	   $host = "mysql7.000webhost.com";
$user = "a8665086_ttag"; // type username here
$password = "password2016"; //set password here
$database_name = "a8665086_thermal";
    $pdo = new PDO("mysql:host=$host;dbname=$database_name", $user, $password, array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ));
$username=$_GET['username'];
$res=$pdo->query("SELECT * FROM tag_search WHERE username like '$username'");
$i=1;
$data="";
while($row=$res->fetch()){   
  $data=$data."".$row['ID'].",".$row['oyster_type'].",".$row['quantity'].",".$row['status'].";";
  $i++;
}
echo($data);
?>