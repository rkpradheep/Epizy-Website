<?php
function save() {

require 'dbConnectionUtil.php';


$ary=explode(",",$_REQUEST["q"]);
$q = $ary[0];
$sur=$ary[1];
try
{
$a=executeSelectQuery("select * from survey where date='$sur'");
$row = mysqli_fetch_assoc($a);
if($row==null)
 throw new Exception("a");
$aa=$row['count']+1;
executeQuery("update survey set count=$aa where date='$sur'");

}
catch(Exception e)
{
executeQuery("");
}

$linn=array('ATCD','WEB_TECH','EMBEDDED','COMPUTER_NETWORK','DISTRIBUTED_SYSTEM','WT_LAB','CN_LAB');
$result=executeSelectQuery("select * from table2");
$i=0;
$lin=array();
$row = mysqli_fetch_assoc($result);
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
