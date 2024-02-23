<?php
$fname=$_POST['File'];
$fname=str_replace('files/','',$fname);

require 'dbConnectionUtil.php';

executeQuery("delete  from table100 where fname='$fname'");
unlink($_POST['File']);
echo $fname;
?>