<?php
   class MyDB extends SQLite3 {
      function __construct() {
         $this->open('files/db.sqlite3');
      }
   }
   
   $db = new MyDB();
   if(!$db) {
      echo $db->lastErrorMsg();
   } else {
     // echo "Opened database successfully<br/>";
   }

   $sql =<<<EOF
      SELECT * from course_with_scores;
EOF;

   $ret = $db->query($sql);
   while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
      echo "Score =".$row['score'] . "<br/>";
      echo "Email = ". $row['email'] ."<br/>";
      echo "Course = ". $row['course'] ."<br/>";
      echo "Category = ".$row['category'] ."<br/><br/><br/>";
   }
   //echo "Operation done successfully<br/>";
   $db->close();
?>