<?php
$ary=$_REQUEST["q"];
mysql_connect("sql104.epizy.com","epiz_26572955","OsCctiZvPgtgTxY");
mysql_select_db("epiz_26572955_db1");
$res=mysql_query("select * from table100");
$ptr=0;
while($r=mysql_fetch_assoc($res)){
if($r['name']==$ary || $r['name']==$ary.'.txt')
 $ptr=1;
}
if($ptr==0)
{
echo 'dd';
}
else 
echo "error";

?>