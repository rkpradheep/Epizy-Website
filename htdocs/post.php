<?php

session_start();
if(isset($_SESSION['name'])){
    $text = $_POST['text'];
     
     if($_POST['Url']!=null)
     {
if($text!=null){
    $text_message ="<div class='container darker'>
    <b class='user-name'>".$_SESSION['name']."</b><br><br>
	  <p style='margin-left:15px'>".stripslashes(htmlspecialchars($text))."</p>
<br><br>
  <a style='margin-left:15px' href='".$_POST['Url']."'>".$_POST['Fname']."</a><br>
  <span class='time-left'>".$_POST['Time']."</span>
		 </div><br><br>";}
else{
if(strpos($_POST['Ftype'], 'image') !== false){
	$text_message ="<div class='container darker'>
    <b class='user-name'>".$_SESSION['name']."</b><br><br>
  <a style='margin-left:15px' href='".$_POST['Url']."'>
  <img height=200px width=170px src='".$_POST['Url']."'></a><br>
  <span class='time-left'>".$_POST['Time']."</span>
</div><br><br>";
}
else{
$text_message ="<div class='container darker'>
    <b class='user-name'>".$_SESSION['name']."</b><br><br>
  <a style='margin-left:15px' href='".$_POST['Url']."'>
  ".$_POST['Fname']."
  </a><br>
  <span class='time-left'>".$_POST['Time']."</span>
</div><br><br>";
}
}
     }

else
{
    $text_message ="<div class='container darker'>
    <b class='user-name'>".$_SESSION['name']."</b> <br><br>
  <p style='margin-left:15px'>".stripslashes(htmlspecialchars($text))."</p>
  
  <span class='time-left'>".$_POST['Time']."</span>
</div><br><br>";
}
    
  file_put_contents("log.html", $text_message, FILE_APPEND | LOCK_EX);
}
?>