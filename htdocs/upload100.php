<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$ary=$_REQUEST["q"];
$mysqli=mysqli_connect("sql104.epizy.com","epiz_26572955","OsCctiZvPgtgTxY");
mysqli_select_db($mysqli, "epiz_26572955_db1");
$res=mysqli_query($mysqli, "select * from table100 where name='$ary'");

$ress=mysqli_num_rows($res);

if($ress<1)
{
echo 'de';
}
else 
echo 'error';

?>