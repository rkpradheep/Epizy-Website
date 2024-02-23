<?php

require 'dbConnectionUtil.php';

$ary=explode(",",$_REQUEST["q"]);
$re=$_REQUEST["qq"];
$ree=$_REQUEST["qqq"];
$r=executeQuery("insert into table100 (name,link,fname,ftype) values('$ary[0]','$ary[1]','$re','$ree')");
if($r)
echo 'suc';
else
echo $r;


?>