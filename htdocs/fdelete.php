<?php
require 'dbConnectionUtil.php';

$qq=$_REQUEST["q"];
$g=$qq.".txt";

executeQuery("delete from table100 where name='$g'");
executeQuery("delete from table100 where name='$qq'");
unlink("files/".$g);
echo $qq;
?>
