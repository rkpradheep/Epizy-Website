<?php
$qq=$_REQUEST["q"];
require 'dbConnectionUtil.php';

executeQuery("delete from survey where date='$qq'");
executeQuery("delete from time where date='$qq'");
echo "suc";
?>