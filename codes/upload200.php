<?php
$ary=$_REQUEST["q"];
mysql_connect("sql104.epizy.com","epiz_26572955","OsCctiZvPgtgTxY");
mysql_select_db("epiz_26572955_db1");
$res=mysql_query("select * from table100");
$ptr=0;
$re=$ary.'.txt';

while($r=mysql_fetch_assoc($res)){
if($r['name']==$ary||$r['name']==$re)
{if($r['name']== $re)
 {
 $ak="sup";
 $ptr=1;
 break;
 }
 else{
 $ak=$r['link'];
 $ptr=1;
 break;
 }
}
}

if($ptr==1 && $ak)
{
echo 'suc';
}
else if($ptr==1)
echo 'd';
else 
echo "error";

?>