<?php
function save() {

mysql_connect("sql104.epizy.com","epiz_26572955","OsCctiZvPgtgTxY");
mysql_select_db("epiz_26572955_db1");

$ary=explode(",",$_REQUEST["q"]);
$q = $ary[0];
$sur=$ary[1];
try
{
$a=mysql_query("select * from survey where date='$sur'");
$row = mysql_fetch_assoc($a);
if($row==null)
 throw new Exception("a");
$aa=$row['count']+1;
mysql_query("update survey set count=$aa where date='$sur'");

}
catch(Exception $e)
{
mysql_query("insert into survey(date,count) values('$sur',1)");
}

$linn=array('ATCD','WEB_TECH','EMBEDDED','COMPUTER_NETWORK','DISTRIBUTED_SYSTEM','WT_LAB','CN_LAB');
$result=mysql_query("select * from table2"); 
$i=0;
$lin=array();
$row = mysql_fetch_assoc($result);
while($i<8){
$lin[$i]=$row[$linn[$i]];
$type=gettype($lin[$i]);
if($type=="NULL")
$lin[$i]='none';
$i=$i+1;

}
return $lin[$q];
}



$pas=true;
$pass = save();

echo $pas ? $pass:'error';

?>
