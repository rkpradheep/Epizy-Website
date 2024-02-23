<?php

session_start();
require 'dbConnectionUtil.php';

$name=$_POST['txt'];
$email=$_POST['email'];
$password=$_POST['pswd'];
$c=executeSelectQuery("select * from Customers where Email='$email'");
if(mysqli_num_rows($c)==0){
$_SESSION['name'] = $_POST['txt'];
$r=executeQuery("insert into Customers values('$name','$email','$password')");
echo $name;

//header('Location:products.php');
}


else
echo '<h1 style="color:red">User with this Email already exist<h1>';

?>