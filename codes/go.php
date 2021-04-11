<html>
<body>
<style>
button{height:30;
width:70;
  background-color: green;
  border: none;
  color: white;
  font-weight:bold;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;}

</style>

<?php
$val=$_REQUEST["q"];
if(!$val)
$val=$_REQUEST["pqpq"];
mysql_connect("sql104.epizy.com","epiz_26572955","OsCctiZvPgtgTxY");
mysql_select_db("epiz_26572955_db1");

$res=mysql_query("select link from table100 where name='$val'");
$pol=0;

while($row = mysql_fetch_array($res))
{ 
    $t=$row['link'];
     $pol+=1;
}

if($pol>1)
{   echo "<script>  var ass=10;</script>";
   $ress=mysql_query("select * from table100 where name='$val'");
    while($row= mysql_fetch_array($ress))
    {if(strpos($row['ftype'],"pdf")||strpos($row['ftype'],"wordprocessing")||strpos($row['ftype'],"presentation"))
        echo "<a href='$row[link]'style='text-decoration:none;color:black'><img src='fm.jpg' height='50' width='50' ><br>$row[fname]</a>&nbsp;&nbsp;
        <a href='https://docs.google.com/gview?embedded=true&url=$row[link]'>only view</a><br><br><br>";
        else
        echo "<a href='$row[link]'style='text-decoration:none;color:black'><img src='fm.jpg' height='50' width='50' ><br>$row[fname]</a><br><br><br>";
    }
}
else if($pol==1)
{
 $res=mysql_query("select * from table100 where name='$val'");
$row = mysql_fetch_array($res);
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
  $my.=htmlspecialchars(fgets($myfile));

}}

}
?>
<button onclick="copy()"style="margin-left:730" id="n" style="display:block">COPY</button></b><br>
<textarea  cols="100" rows="100" id="m" style="display:block"><?=$my?></textarea>
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