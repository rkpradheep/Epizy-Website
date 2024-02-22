
<html>
<meta name='viewport' content='width=device-width,initial-scale=1.0'></meta>
<style>

h1{
	text-align:center;
}
label
{
color:red;
font-weight:bold;
}
.d
{
color:green;
font-size:20px;
}

</style>
<h1> LOG DELETE </h1><br><br>


<?php

if(file_exists("log.html")){
	echo '<button onclick="dellog()" id="dellogbtn">Delete</button><br><br>';
    echo "<label id='loglabel'> log.html </label>";
	}
	else
		echo 'Nothing to delete';

?>


<p>------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
</p><br><br><br>

<h1> LOCAL SERVER FILE DELETE </h1><br><br>


<a href="https://rkpradheep.pagekite.me/firebaseadministrator.php">Click here</a><p>(available only when Local Lerver is active)</p>
<br><br><br>

<p>------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
</p><br><br><br>

<h1> TEXT DELETE </h1><br><br>



<?php

$files=scandir("files");
if(sizeof($files)>2)
	echo '<button onclick="delfile()" >Delete</button><br><br>';
else
	echo 'Nothing to delete';

for($i=2;$i<sizeof($files);$i+=1)
	echo "<label id='l$i'> $files[$i] </label><input type='checkbox' id='f$i' value='$files[$i]'><br><br>";
?>
<br><br><br>
<p>------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
</p><br><br><br>

<h1 > FILE DELETE </h1><br><br>
<p id='empty'></p>
<script>
function dellog()

{
if(document.getElementById("loglabel")!=null)    {
$.post("delete.php", {File:"log.html"});
    document.getElementById("loglabel").remove();
	document.getElementById("dellogbtn").remove();

}
       //alert(document.getElementById("f2").value);


}

function delfile()

{    
  var C=0;
  
  for(var p=2;p< <?php echo sizeof($files) ?>;p++)
if(document.getElementById("f"+p)!=null)
  if(document.getElementById("f"+p).checked)
		{ 
$.post("delete.php", {File:"files/"+document.getElementById("f"+p).value}
);
C++;
document.getElementById("l"+p).remove();
document.getElementById("f"+p).remove();
		}
	
       //alert(document.getElementById("f2").value);
	alert(C+" FILES DELETED SUCCESSFULLY");


}
var j=1;
var C=0;
function del()
{

if(j<i){
if(document.getElementById("file"+j)!=null)
{
if(document.getElementById("file"+j).checked)
{
var desertRef = firebase.storage().ref().child(document.getElementById("file"+j).value);
desertRef.delete().then(() => {
$.post("delete.php", {File:document.getElementById("file"+j).value});
document.getElementById("file"+j).remove();
document.getElementById("label"+j).remove();
C++;
j+=1;
del();
  // File deleted successfully
}).catch((error) => {
alert(error);
  // Uh-oh, an error occurred!
});
}
else
{
j++;
del();
}
}
else
{
j++;
del();
}
}
else
  { 
      j=1;
      C=0;
      alert(C+" FILES DELETED SUCCESSFULLY");
  }
 
}
var i=1;
// Create a reference under which you want to list
</script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://www.gstatic.com/firebasejs/8.2.2/firebase.js"></script>
       <script src="https://www.gstatic.com/firebasejs/8.2.2/firebase-analytics.js"></script>

        <script type="text/javascript">
if ( window.history.replaceState ) window.history.replaceState( null, null, window.location.href );

   var firebaseConfig = {
    apiKey:"AIzaSyAVEzySXGbzOcz_Gtcrn0LV0ia7ASELR7E",
    authDomain:"file-b23ef.firebaseapp.com",
    databaseURL: "https://file-b23ef.firebaseio.com",
    projectId:"file-b23ef",
    storageBucket:"file-b23ef.appspot.com",
    messagingSenderId: "33917125087",
    appId:"1:33917125087:web:ef42394594cc3b75f0c46a",
    measurementId: "G-2F095XBJ38"
  };
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
  var listRef = firebase.storage().ref();

// Find all the prefixes and items.
listRef.listAll()
  .then((res) => {
    res.prefixes.forEach((folderRef) => {
      // All the prefixes under listRef.
      // You may call listAll() recursively on them.
	//alert(folderRef.name);
    });
    res.items.forEach((itemRef) => {
  var x = document.createElement("INPUT");
  x.setAttribute("type", "checkbox");
  x.setAttribute("id","file"+i);
  x.setAttribute("value",itemRef.name);
  document.body.appendChild(x);   
  var xx = document.createElement("LABEL");
  xx.id="label"+i;
  var t = document.createTextNode(itemRef.name);
  xx.appendChild(t);
  document.body.insertBefore(xx,document.getElementById("file"+i));
  document.body.appendChild(document.createElement("BR"));
  document.body.appendChild(document.createElement("BR"));
  i+=1;
    });
  }).catch((error) => {
    // Uh-oh, an error occurred!
  });
</script>

<button onclick="del()" id="filebutton">Delete</button>
<ol id="myList">
  
</ol>
</html>