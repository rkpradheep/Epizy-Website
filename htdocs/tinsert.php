<?php

require 'dbConnectionUtil.php';

$ll=$_POST['lnk'];
$format=$_POST['r1'];
$l=strlen($ll);
$ff=$_POST['f100'];
$final100=$_POST['f100'].'.txt';
unlink("files/".$final100);
executeQuery("delete from table100 where name='$ff' and ftype!='localserver'");
executeQuery("insert into table100 (name,fname) values('$ff','$final100')");
$myfile = fopen("files/".$final100, "w");
if($format=='linkk')
 fwrite($myfile,"link\n");
else
 fwrite($myfile,"others\n");
fwrite($myfile,$ll);
fclose($myfile);

header("LOCATION:http://rkpradheep.epizy.com");
?>