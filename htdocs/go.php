<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
</head>
<body>
<script>
var ass=0;
</script>
<style>
div{

position:absolute;
left:50%;
top:50%;

width:80%;
height:500px;
margin-top:-250px;
margin-left:-40%;
}
textarea
{
word-spacing:5px;
color:white;
position:absolute;
left:50%;
top:50%;
width:100%;
height:500px;
margin-top:-250px;
margin-left:-50%;
background-color: black;
}
button{
top:-7%;
position:absolute;
right:0;
height:30;
width:70;
  background-color: green;
  border: none;
  color: white;
  font-weight:bold;
  text-decoration: none;
  
  cursor: pointer;}


</style>

<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
require 'dbConnectionUtil.php';

$val=$_REQUEST["q"];
if(!$val)
$val=$_REQUEST["pqpq"];

if($val=="ALL")
{
echo "<script>  var ass=10;</script>";
   $ress=executeSelectQuery("select * from table100 where ftype!='localserver'");
    while($row= mysqli_fetch_array($ress))
    {
        if(strpos($row['ftype'],"pdf")||strpos($row['ftype'],"wordprocessing")||strpos($row['ftype'],"presentation"))
        echo "<a href='$row[link]'style='text-decoration:none;color:black'><img src='fm.jpg' height='50' width='50' ><br>$row[fname]</a>&nbsp;&nbsp;
        <a href='https://docs.google.com/gview?embedded=true&url=$row[link]'>only view</a>&nbsp;&nbsp<b>[$row[name]]</b><br><br><br>";
        else if($row['link'])
        echo "<a href='$row[link]'style='text-decoration:none;color:black'><img src='fm.jpg' height='50' width='50' ><br>$row[fname]</a>&nbsp;&nbsp<b>[$row[name]]</b><br><br><br>";
    }
}
else{





$res=executeSelectQuery("select link from table100 where name='$val' and ftype!='localserver'");
$pol=0;$t='';

while($row = mysqli_fetch_array($res))
{ 
    $t=$row['link'];
     $pol+=1;
}

if($pol>1)
{   echo "<script>  var ass=10;</script>";
   $ress=executeSelectQuery("select * from table100 where name='$val' and ftype!='localserver'");
    while($row= mysqli_fetch_array($ress))
    {if(strpos($row['ftype'],"pdf")||strpos($row['ftype'],"wordprocessing")||strpos($row['ftype'],"presentation"))
        echo "<a href='$row[link]'style='text-decoration:none;color:black'><img src='fm.jpg' height='50' width='50' ><br>$row[fname]</a>&nbsp;&nbsp;
        <a href='https://docs.google.com/gview?embedded=true&url=$row[link]'>only view</a><br><br><br>";
        else
        echo "<a href='$row[link]'style='text-decoration:none;color:black'><img src='fm.jpg' height='50' width='50' ><br>$row[fname]</a><br><br><br>";
    }
}
else if($pol==1 && $t!='')
{

$res=executeSelectQuery("select * from table100 where name='$val'");
$row = mysqli_fetch_array($res);
if(strpos($row['ftype'],"pdf")||strpos($row['ftype'],"wordprocessing")||strpos($row['ftype'],"presentation"))
{  echo "<script> var ass=10;</script>";
echo "<a href='$row[link]'style='text-decoration:none;color:black'><img src='fm.jpg' height='50' width='50' ><br>$row[fname]</a>&nbsp;&nbsp;
        <a href='https://docs.google.com/gview?embedded=true&url=$row[link]'>only view</a><br><br><br>";
}else
header("Location:$row[link]");

}
else
{
$myfile1 = fopen("files/".$val.".txt", "r") ;
$pl=fgets($myfile1);
if($pl[0]=='l')
{
$ppl=fgets($myfile1);
header("Location:$ppl");
}
else
{
 $myfile = fopen("files/".$val.".txt", "r") ;
$pl=fgets($myfile);
while(!feof($myfile)) {
$my=htmlspecialchars(fgets($myfile));

}}
}
}
?>
<div>
<button onclick="copy()" id="n" style="display:block">COPY</button><br>

<textarea id="m" style="display:block;color:white;background-color:black"><?=$my?></textarea>

</div>
<script>

if(ass)
{
document.getElementById("m").style.display="none";
document.getElementById("n").style.display="none";
}
function copy() {
  var copyText = document.getElementById("m");
  copyText.select();
  document.execCommand("copy");
  alert("copied successfully" );
  if (window.getSelection) {
  if (window.getSelection().empty) {  
  window.getSelection().empty();
  } else if (window.getSelection().removeAllRanges) {  
  window.getSelection().removeAllRanges();
  }
  } else if (document.selection) {  
  document.selection.empty();
  }
}
</script>

</script>

</body></html>