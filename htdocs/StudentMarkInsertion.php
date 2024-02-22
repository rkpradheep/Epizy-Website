<?php

   class MyDB extends SQLite3 {
      function __construct() {
         $this->open('files/db.sqlite3');
      }
   }
   
   $db = new MyDB();
   if(!$db){
      echo $db->lastErrorMsg();
   } else {
      //echo "Opened database successfully\n";
   }
   $email=$_POST['email'];
   $course=$_POST['course'];
   $score=$_POST['score'];
   $category='';
   if($score<31)
     $category='Beginner';
   else if($score<71)
   $category='Intermediate';
   else
    $category='Advanced';
   $date=date("Y-m-d");

   $sql =<<<EOF
      INSERT INTO course_with_scores (email,course,score,category,datecolumn) VALUES ('$email','$course','$score','$category','$date');
      EOF;

   $ret = $db->exec($sql);
   if(!$ret) {
      echo $db->lastErrorMsg();
   } else {
      echo $score;
   }
   $db->close();
   
?>