<?php

require 'dbConnectionUtil.php';

$ary=$_REQUEST["q"];

$aa=executeSelectQuery("select * from time where date='$ary'");
$t.="\n";

while($row = mysqli_fetch_array($aa))
   {$t.="  ";
    $pp=$row['tim'];
     $tt=explode("ppp",$pp);
     $very=$tt[3];
     $very=str_replace("lp",",",$very);
      $t.=$tt[0]."\n  ".$tt[1]."\n  ".str_replace("lp",",",$tt[2])."\n  ".$very;
      $t.="\n\n\n";
}

try
{
$a=executeSelectQuery("select * from survey where date='$ary'");
$row = mysqli_fetch_array($a);
if($row==null)
 throw new Exception("a");
$aa=$row['visited'];
$aaa=$row['count'];
$app=$row['app'];
$app.=" (".round((($app/$aa)*100),2)."%)\n\n";
$brows=$aa-$app;
$brows.=" (".round((($brows/$aa)*100),2)."%)\n\n";
$aa.="\n\n";
$aaa.="\n\n";

echo "* TODAY(".$ary.")\n\n".'* Total users visited = '.$aa.'* App users = '.$app.'* Link users = '.$brows.'* Time Visited: '.$t;
}
catch(Exception $e)
{
echo 'n';
}
?>