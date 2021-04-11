<?php
$ary=explode(",",$_REQUEST["q"]);
$re=$_REQUEST["qq"];
$ree=$_REQUEST["qqq"];
mysql_connect("sql104.epizy.com","epiz_26572955","OsCctiZvPgtgTxY");
mysql_select_db("epiz_26572955_db1");
$r=mysql_query("insert into table100 (name,link,fname,ftype) values('$ary[0]','$ary[1]','$re','$ree')");
if($r)
echo 'suc';
else
echo $r;


?>