<?php session_start();
if(ISSET($_SESSION['username'])){
?>
<?php header("Location: page1.php"); ?>
<?php
}else{
?>This page just for registered users. You are not authorized to access this page. Please <a href="index.php">Login</a> first<?php
}
?>