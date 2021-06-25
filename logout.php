<?php 
session_start();
$_SESSION['username']="";
$_SESSION['role']="";
unset($_SESSION["username"]);

header("location:login.html")


 ?>