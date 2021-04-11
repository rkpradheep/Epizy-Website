<?php
mysql_connect("sql104.epizy.com","epiz_26572955","OsCctiZvPgtgTxY");
mysql_select_db("epiz_26572955_db1");
$ll=$_POST['lnk'];
$format=$_POST['r1'];
$l=strlen($ll);
$ff=$_POST['f100'];
$final100=$_POST['f100'].'.txt';
unlink("files/".$final100);
mysql_query("delete from table100 where name='$ff'");
mysql_query("delete from table100 where name='$final100'");
$r=mysql_query("insert into table100 (name) values('$final100')");
$myfile = fopen("files/".$final100, "w");
if($format=='linkk')
 fwrite($myfile,"link\n");
else
 fwrite($myfile,"others\n");
fwrite($myfile,$ll);
fclose($myfile);

header("LOCATION:https://rkpradheep.epizy.com");
?>