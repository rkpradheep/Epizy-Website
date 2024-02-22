<?php

session_start();
mysql_connect("sql104.epizy.com","epiz_26572955","OsCctiZvPgtgTxY");
mysql_select_db("epiz_26572955_db1");
$name=$_POST['txt'];
$email=$_POST['email'];
$password=$_POST['pswd'];
$c=mysql_query("select * from Customers where Email='$email'");
if(mysql_num_rows($c)==0){
$_SESSION['name'] = $_POST['txt'];
$r=mysql_query("insert into Customers values('$name','$email','$password')");
echo $name;

//header('Location:products.php');
}


else
echo '<h1 style="color:red">User with this Email already exist<h1>';

?>