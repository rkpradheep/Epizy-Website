<?php
session_start();
mysql_connect("sql104.epizy.com","epiz_26572955","OsCctiZvPgtgTxY");
mysql_select_db("epiz_26572955_db1");
$email=$_POST['email'];
$password=$_POST['pswd'];
$c=mysql_query("select Name from Customers where Email='$email' and Password='$password'");
if(mysql_num_rows($c)==1){
$res=mysql_fetch_assoc($c);
$_SESSION['name'] = $res['Name'];
header('Location:products.php');
}
else
  echo '<h1 style="color:red">Incorrect Email id or Password<h1>';

?>