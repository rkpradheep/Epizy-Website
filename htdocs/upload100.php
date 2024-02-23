<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
require 'dbConnectionUtil.php';

error_reporting(E_ALL);
$ary=$_REQUEST["q"];

$res=executeSelectQuery("select * from table100 where name='$ary'");

$ress=mysqli_num_rows($res);

if($ress<1)
{
echo 'de';
}
else 
echo 'error';

?>