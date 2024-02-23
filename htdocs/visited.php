<?php

require 'dbConnectionUtil.php';

$aryy=explode(",",$_REQUEST["q"]);
$tim=$aryy[1];
$ary=$aryy[0];
if ($_SERVER['HTTP_X_REQUESTED_WITH'] == "com.example.go") {
  $app=1;
} else {
    $app=0;
}
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
executeQuery("insert into time(date,tim) values('$ary','$tim')");
try
{
executeQuery("delete from survey where date!='$ary'");
executeQuery("delete from time where date!='$ary'");
$row=mysqli_fetch_assoc(executeSelectQuery("select * from survey where date='$ary'"));
if($row==null)
 throw new Exception("a");
$aa=$row['visited']+1;
$app=$row['app']+$app;
executeQuery("update survey set visited=$aa,app=$app where date='$ary'");
}
catch(Exception $e)
{
executeQuery("insert into survey(date,visited,app) values('$ary',1,$app)");
}
if($_SERVER['HTTP_X_REQUESTED_WITH'] == "com.example.go")
echo "bp";
else 
echo 1;
?>