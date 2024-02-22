

<html>
<body>
<?php


$fname = $_POST['n1'];
$myfile = fopen("files/".$fname.".txt", "r") ;
$pl=fgets($myfile);
if($pl[0]=='l')
{$ppl=fgets($myfile);
header("Location:$ppl");
}
else if($pl)
{
while(!feof($myfile)) {
$my.=htmlspecialchars(fgets($myfile));

} 
}
else
  echo 'invalid id';
?>
<div style="background-color:white;height:500;width:500"> </div>
<textarea id="m"  style="color:white;border-color:white;position:absolute;margin-top:100px;z-index:-1"><?=$my?></textarea>

<script>

window.addEventListener("click",copy);
window.addEventListener("keypress",copy);

 function copy(){
  var copyText = document.getElementById("m");
  copyText.select();
  document.execCommand("copy");
  document.write("");
  history.back();
  }
  
</script>

</body></html>

