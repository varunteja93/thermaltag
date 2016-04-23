<?php session_start(); 

include("config.php");
$username=$_POST['username'];
$password=$_POST['password'];

$_SESSION['username']=$username;
$query = $pdo->prepare("select * from user where username LIKE '%$username%' AND password LIKE '%$password%'  LIMIT 0, 1 ");
$query->execute();
if($check = $query->fetch()){
	
	if($check['username'] == $_POST['username']){
		if($check['access_level'] == 'admin'){
			//admin
			header('Location: admin.php');
		} else{
			//user

			header("Location: page1.php?normaluser=$username");
		}
	} else{
		echo "You have failed to login. Please <a href='index.php'>Login </a> again";	
	}
} 
else {
	echo "username and password invalid ! Please <a href='index.php'>Login</a> again";
}
?>