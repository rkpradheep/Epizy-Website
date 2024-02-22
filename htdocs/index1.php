<?php

$file="data.json";


$json = file_get_contents('data.json'); 

  
// Decode the JSON file 

$j= json_decode($json,true); 

  
// Display data 
foreach ($j['data'] as $rs) 
echo $res; 
/*
$json = json_decode(file_get_contents($file),TRUE);

//$d=$json['data'];
// foreach ($d as $rs) 
 var_dump($json);
 //file_get_contents("data.json");
*/
//file_put_contents($file, json_encode($json));
?>