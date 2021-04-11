<?php
$qq=$_REQUEST["q"];
mysql_connect("sql104.epizy.com","epiz_26572955","OsCctiZvPgtgTxY");
mysql_select_db("epiz_26572955_db1");
mysql_query("delete from survey where date='$qq'");
mysql_query("delete from time where date='$qq'");
echo "suc";
?>