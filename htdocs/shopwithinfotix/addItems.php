<?php

$file="data.json";


$json = file_get_contents('data.json'); 

  
// Decode the JSON file 

$j= json_decode($json,true);  

//$k=1;
  
// Display data 
//foreach ($j["data"] as $rs){
      //if($k>8)
    //  {
        //echo $rs["product_image_md"].'<br>';  
      /* if (!isset($res)) 
         $myObj = new stdClass();
       $myObj->product_image = $rs["product_image"];
       $myObj->_id = strval($k);
       $myObj->product_name =$rs["product_name"];
       $myObj->product_price=$rs["product_price"];
       $myObj->product_ratings =$rs["product_ratings"];
       
      $j["data"][$k-1]=$myObj;

      $k++;
         */
     // }
       
     //  else
        // $k++;
        // }
         $myObj->product_image =$_POST["product_image"];
         $myObj->_id = strval(count($j["data"])+1);
         $myObj->product_name =$_POST["product_name"];
         $myObj->product_price=$_POST["product_price"];
         $myObj->product_ratings =$_POST["product_ratings"];
         array_push($j["data"],$myObj);
         file_put_contents($file,stripslashes(json_encode($j,JSON_PRETTY_PRINT)));

         echo 1;
//$d=$json['data'];
// foreach ($d as $rs) 
// var_dump($json);
 //file_get_contents("data.json");

//file_put_contents($file, json_encode($json));
?>