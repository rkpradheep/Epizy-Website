<?php
require 'dbConnectionUtil.php';

$ary=$_REQUEST["q"];
$res=executeSelectQuery("select * from table100");
$ptr=0;
$re=$ary.'.txt';

while($r=mysqli_fetch_array($res)){
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