<?php
$mysqli=mysqli_connect("sql104.epizy.com","epiz_26572955","OsCctiZvPgtgTxY");
mysqli_select_db($mysqli, "epiz_26572955_db1");
$ll=$_POST['lnk'];
$format=$_POST['r1'];
$l=strlen($ll);
$ff=$_POST['f100'];
$final100=$_POST['f100'].'.txt';
unlink("files/".$final100);
mysqli_query($mysqli, "delete from table100 where name='$ff' and ftype!='localserver'");
$r=mysqli_query($mysqli, "insert into table100 (name,fname) values('$ff','$final100')");
$myfile = fopen("files/".$final100, "w");
if($format=='linkk')
 fwrite($myfile,"link\n");
else
 fwrite($myfile,"others\n");
fwrite($myfile,$ll);
fclose($myfile);

header("LOCATION:http://rkpradheep.epizy.com");
?>