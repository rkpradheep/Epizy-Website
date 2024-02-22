<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=none">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
   <link rel="stylesheet" href="css/product.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
    <title>Gadgets Store</title>
  
</head>
<body style="background: linear-gradient(to bottom right, #274B74 0%, #8233C5 50%, #E963FD 100%);">

<a href="logout.php" class="btn btn-info btn-lg" style="margin-left:60%">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </a>
    <center>
    <div style="background-color:black;width:100%">
<h3 style="color:white">Welcome,<?php echo ' '.$_SESSION['name']?></h3>
<div>
</center>
<br><br>



<div class="search"> 
       
       <form action="#" > 

                <input type="text" style="height:60px"

                    placeholder=" Search Items"

                    name="search" id="search" oninput="modify()"> 

                <a id="cartBtn" style="margin-top:0px;margin-left:5%;position:absolute">
<img src="download.png" height="50" style="display:inline-block">
                </a> 

            </form> 

        </div>
  <br><br>
    <div class="products" id="products">
        <h2>Wait while we load the Products !!</h2>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="script/products.js"></script>
</html>