<?php

require 'dbConnectionUtil.php';


$sur=$_REQUEST["q"];
try
{
$a=executeSelectQuery("select * from survey where date='$sur'");
$row = mysqli_fetch_assoc($a);
if($row==null)
 $count=0;
else
   $count=$row['count'];

 echo $count
 ?>
