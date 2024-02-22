<?php
$qq=$_REQUEST["q"];
$g=$qq.".txt";
$mysqli=mysqli_connect("sql104.epizy.com","epiz_26572955","OsCctiZvPgtgTxY");
mysqli_select_db($mysqli, "epiz_26572955_db1");
mysqli_query($mysqli, "delete from table100 where name='$g'");
mysqli_query($mysqli, "delete from table100 where name='$qq'");
unlink("files/".$g);
echo $qq;
?>