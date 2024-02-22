<?php
$ll=$_POST['lnk'];
$format=$_POST['r1'];
$l=strlen($ll);

$myfile = fopen("testfile.txt", "w");
if($format=='linkk')
 fwrite($myfile,"link\n");
else
 fwrite($myfile,"others\n");
fwrite($myfile,$ll);
fclose($myfile);
echo $pp;
header("LOCATION:http://rkpradheep.epizy.com")


?>