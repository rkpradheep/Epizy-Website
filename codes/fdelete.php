<?php
$qq=$_REQUEST["q"];
$g=$qq.".txt";
mysql_connect("sql104.epizy.com","epiz_26572955","OsCctiZvPgtgTxY");
mysql_select_db("epiz_26572955_db1");
mysql_query("delete from table100 where name='$g'");
mysql_query("delete from table100 where name='$qq'");
unlink("files/".$g);
echo $qq;
?>