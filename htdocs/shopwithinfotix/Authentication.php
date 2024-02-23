<?php
session_start();
require 'dbConnectionUtil.php';

$email=$_POST['email'];
$password=$_POST['pswd'];
$c=executeSelectQuery("select Name from Customers where Email='$email' and Password='$password'");
if(mysqli_num_rows($c)==1){
$res=mysqli_fetch_assoc($c);
$_SESSION['name'] = $res['Name'];
header('Location:products.php');
}
else
  echo '<h1 style="color:red">Incorrect Email id or Password<h1>';

?>