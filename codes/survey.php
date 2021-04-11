<?php

mysql_connect("sql104.epizy.com","epiz_26572955","OsCctiZvPgtgTxY");
mysql_select_db("epiz_26572955_db1");

$sur=$_REQUEST["q"];
try
{
$a=mysql_query("select * from survey where date='$sur'");
$row = mysql_fetch_assoc($a);
if($row==null)
 $count=0;
else
   $count=$row['count'];

 echo $count
 ?>
