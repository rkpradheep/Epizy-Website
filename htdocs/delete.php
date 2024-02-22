<?php
$fname=$_POST['File'];
$fname=str_replace('files/','',$fname);
mysql_connect("sql104.epizy.com","epiz_26572955","OsCctiZvPgtgTxY");
mysql_select_db("epiz_26572955_db1");
mysql_query("delete  from table100 where fname='$fname'");
unlink($_POST['File']);
echo $fname;
?>