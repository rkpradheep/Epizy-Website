<?php
$ary=explode(",",$_REQUEST["q"]);
$l=$ary[0];
$subjects=$ary[1];

require 'dbConnectionUtil.php';


$res=executeSelectQuery("select * from table2");
$r=mysqli_fetch_assoc($res);
$j=0;$k=0;
$linn=array('ATCD','WEB_TECH','EMBEDDED','COMPUTER_NETWORK','DISTRIBUTED_SYSTEM','WT_LAB','CN_LAB');
while($j<8){
if($r[$linn[$j]])
 { $k=1;
  break;}
  $j+=1;
}
if($k==0 && $l!="")
$r=executeQuery("insert into table2 ($subjects) values('$l')");
else if($l!="")
$r=executeQuery("update table2 set $subjects='$l'");
 else 
 $r=executeQuery("truncate table table2 ");
echo $r? $subjects : "error";

?>