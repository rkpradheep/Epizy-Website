<?php
$ary=explode(",",$_REQUEST["q"]);
$l=$ary[0];
$subjects=$ary[1];
mysql_connect("sql104.epizy.com","epiz_26572955","OsCctiZvPgtgTxY");
mysql_select_db("epiz_26572955_db1");


$res=mysql_query("select * from table2");
$r=mysql_fetch_assoc($res);
$j=0;$k=0;
$linn=array('ATCD','WEB_TECH','EMBEDDED','COMPUTER_NETWORK','DISTRIBUTED_SYSTEM','WT_LAB','CN_LAB');
while($j<8){
if($r[$linn[$j]])
 { $k=1;
  break;}
  $j+=1;
}
if($k==0 && $l!="")
$r=mysql_query("insert into table2 ($subjects) values('$l')");
else if($l!="")
$r=mysql_query("update table2 set $subjects='$l'");
 else 
 $r=mysql_query("truncate table table2 ");
echo $r? $subjects : "error";

?>