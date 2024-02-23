<?php

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

$mysqli=mysqli_connect("sql104.epizy.com","epiz_26572955","OsCctiZvPgtgTxY");
mysqli_select_db($mysqli, "epiz_26572955_db1");

function executeSelectQuery($query)
{
    global $mysqli;
    return mysqli_query($mysqli, $query);
}

function executeQuery($query)
{
    global $mysqli;
    return mysqli_query($mysqli, $query);
}

?>