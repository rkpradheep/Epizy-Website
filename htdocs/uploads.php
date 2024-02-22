<?php

header('Access-Control-Allow-Origin: *');

/* Get the name of the uploaded file */
$filename = $_FILES['file']['name'];
mkdir("uploads/".$_POST['n']);
$t=$_POST['n'];
if($_POST['num']==0)
array_map('unlink', glob("uploads/$t/*.*"));
/* Choose where to save the uploaded file */
$location = "uploads/".$_POST['n']."/".$filename;

/* Save the uploaded file to the local filesystem */
if ( move_uploaded_file($_FILES['file']['tmp_name'], $location) ) { 
  echo 'Success'; 
} else { 
  echo 'Failure'; 
}

?>