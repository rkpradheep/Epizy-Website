<?php
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
$mysqli=mysqli_connect("sql104.epizy.com","epiz_26572955","OsCctiZvPgtgTxY");
mysqli_select_db($mysqli, "epiz_26572955_db1");
mysqli_query($mysqli, "insert into time(date,tim) values('$ary','$tim')");
try
{
mysqli_query($mysqli,"delete from survey where date!='$ary'");
mysqli_query($mysqli,"delete from time where date!='$ary'");
$a=mysqli_query($mysqli,"select * from survey where date='$ary'");
$row = mysqli_fetch_array($a);
if($row==null)
 throw new Exception("a");
$aa=$row['visited']+1;
$app=$row['app']+$app;
mysqli_query($mysqli,"update survey set visited=$aa,app=$app where date='$ary'");
}
catch(Exception $e)
{
mysqli_query($mysqli,"insert into survey(date,visited,app) values('$ary',1,$app)");
}
if($_SERVER['HTTP_X_REQUESTED_WITH'] == "com.example.go")
echo "bp";
else 
echo 1;
?>