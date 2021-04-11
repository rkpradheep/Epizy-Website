<?php
$aryy=explode(",",$_REQUEST["q"]);
$tim=$aryy[1];
$ary=$aryy[0];
if ($_SERVER['HTTP_X_REQUESTED_WITH'] == "com.example.go") {
  $app=1;
} else {
    $app=0;
}
mysql_connect("sql104.epizy.com","epiz_26572955","OsCctiZvPgtgTxY");
mysql_select_db("epiz_26572955_db1");
mysql_query("insert into time(date,tim) values('$ary','$tim')");
try
{
$a=mysql_query("select * from survey where date='$ary'");
$row = mysql_fetch_assoc($a);
if($row==null)
 throw new Exception("a");
$aa=$row['visited']+1;
$app=$row['app']+$app;
mysql_query("update survey set visited=$aa,app=$app where date='$ary'");
}
catch(Exception $e)
{
mysql_query("insert into survey(date,visited,app) values('$ary',1,$app)");
}
if($_SERVER['HTTP_X_REQUESTED_WITH'] == "com.example.go")
echo "bp";
else 
echo 1;
?>