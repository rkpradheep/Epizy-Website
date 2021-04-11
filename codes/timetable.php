
<html>
<head>
  <meta name="viewport" content="user-scalable=no">
<style>

.down
{
color:red;
margin-top:0px;

}
body
{  
background-image:url("iee.jpg");
background-repeat:no-repeat;
background-size: cover;
background-attachment:fixed;

}
.hackk
{  
background-image:url("hackk.jpg");
background-repeat:no-repeat;
background-size: cover;

}
.b
{
text-align:center;
margin:auto;
background-color:white;
width:950;height:500;
border-radius: 15px;}


.c
{
margin:auto;
text-align:center;
background-color:white;
width:800;
height:400;
border-radius: 15px;}
button{
  
  width:150;height:50;
  font-size:12px;
  font-weight:bold;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
}
button.bb
{

height:40;
width:50;
text-align:center;
background-color:red;
border-radius:0;
border-radius:60px;
font-size:15px;
}
input[type=radio] {
    border: 0px;
    width: 100;
  height: 2em;
     
}
button.aa{
height:40;
width:50;
  background-color: red;
  -webkit-border-radius: 60px;
  border-radius: 60px;
  border: none;
  color: #eeeeee;
  cursor: pointer;
  display: inline-block;
  font-family: sans-serif;
  font-size: 20px;
  padding: 10px 10px;
  text-align: center;
  text-decoration: none;
  
}

 .marq{
      font-size: 25px;
      font-weight: 800;
      color:white;
      font-family: sans-serif;
      
      background-color:red;
      }
select {
   
  
   
   background: linear-gradient(45deg, transparent 50%, blue 50%),
   linear-gradient(135deg, blue 50%, transparent 50%),
   linear-gradient(to right, skyblue, skyblue);
   background-position: calc(100% - 21px) calc(1em + 2px),
   calc(100% - 16px) calc(1em + 2px),
   100% 0;
   background-size:  5px 5px,
   5px 5px,
   2.5em 2.5em;
   background-repeat: no-repeat;
   

   -webkit-appearance:none;
   -moz-appearance:none;
   }


@keyframes glowing {
        0% {
          background-color: red;
          box-shadow: 0 0 5px #2ba805;
        }
        50% {
          background-color:#49e819;
          box-shadow: 0 0 20px #49e819;
        }
        100% {
          background-color: #2ba805;
          box-shadow: 0 0 5px #2ba805;
        }
      }
      button.aa{
        animation: glowing 1300ms infinite;
      }










button:hover {background-color: #3e8e41}

button:active {
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
 input[type=submit],input[type=button] 
 {width:100;height:50;
  font-size:12px;

  background-color: #4CAF50;
  border: none;
  color: white;
  font-weight:bold;
 border-radius: 15px;
  text-decoration: none;

  cursor: pointer;}
  div.pa
   {border:10px;background:#131219;;padding: 15px; height:150;}
  .g1{
  margin-top:10;
  color: #fff;
  display: inline-block;
  font-weight:bold;
  padding: 0;
  white-space: nowrap;
  
  font-size:22;
  text-shadow: 0 0 1px #fff, 0 0 2px #fff, 0 0 6px #292736, 0 0 8px #292736, 0 0 10px #292736, 0 0 12px #292736, 0 0 14px #292736;
  animation: glow .59s infinite alternate;
  }
  

  @keyframes glow {
  to {
  text-shadow: 0 0 4px #fff, 0 0 8px #fff, 0 0 12px #d25ed4, 0 0 16px #d25ed4, 0 0 20px #d25ed4, 0 0 24px #d25ed4, 0 0 28px #d25ed4;
  }
  }
  .g1{
  text-shadow: 0 0 1px #fff, 0 0 2px #fff, 0 0 6px #292736, 0 0 8px #292736, 0 0 10px #292736, 0 0 12px #292736, 0 0 14px #292736;
  animation: glow .59s infinite alternate;
  }
  #pot{

    position:absolute;
    
    animation:linear infinite alternate;
    animation-name: run;
    animation-duration: 1s;
}     
@keyframes run {
    0% { left: 65%;}
    50%{ left : 75%;}
    100%{ left: 65%;}
}
</style>

</head>
<body>
<script src="https://www.gstatic.com/firebasejs/8.2.2/firebase.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/8.2.2/firebase-analytics.js"></script>

<script>

 var xhr1 = new XMLHttpRequest();
      xhr1.onload = function () {
     if(this.responseText)
     {  
    var firebaseConfig = {
    apiKey:"AIzaSyAVEzySXGbzOcz_Gtcrn0LV0ia7ASELR7E",
    authDomain:"file-b23ef.firebaseapp.com",
    databaseURL: "https://file-b23ef-default-rtdb.firebaseio.com",
    projectId: "file-b23ef",
    storageBucket:this.responseText,
    messagingSenderId: "33917125087",
    appId:"1:33917125087:web:ef42394594cc3b75f0c46a",
    measurementId: "G-2F095XBJ38"
  };
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
     
     }
      };
  

 xhr1.open('POST', "security.php", true);
  xhr1.send();





  






function check()
{

      var val=document.getElementById("f100").value;
      if(val=="")
        alert("give any name you want,you cannot add any content without giving id")
        else{
      var xhr = new XMLHttpRequest();
      xhr.onload = function () {
     if(this.responseText=="error")
     {
    alert("id already exist");
     return;
     }
       else
          {
        alert("NOW YOU CAN ADD ANYTHING\n"+"REMEMBER,YOU HAVE TO GIVE THE SAME ID WHICH IS '"+val+"' WHILE RETRIEVING THIS DATA");
          document.getElementById("f100").style.display="none";
          document.getElementById("p100").style.display="none";
           document.getElementById("reff").style.display="none";
          }
     
  };



  
  xhr.open('POST', "upload100.php?q="+val, true);
  xhr.send();



}

}





  function go()
  {
var x = document.querySelector("#pp500").files[0];

if(x)
{




       document.getElementById("pp500").style.display="block";
       document.getElementById("ppp500").style.display="block";
 
 var xx =document.getElementById("f100").value;
 var storageRef = firebase.storage().ref();
 var metadata = {
 contentType:x.type,
};

var uploadTask = storageRef.child(xx).put(x, metadata);

uploadTask.on('state_changed', function(snapshot){

  var progress = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
  document.getElementById("ppp500").value=progress;
  
}, function(error) {
 
}, function() {
  uploadTask.snapshot.ref.getDownloadURL().then(function(downloadURL) {
    


 var xhr = new XMLHttpRequest();
      xhr.onload = function () {
   if(this.responseText)
  { 
     alert("upload completed");
     location.reload();}
  };

var q=[xx,downloadURL]
  xhr.open('POST', "upload300.php?q="+q, true);
  xhr.send();

















  });
});
}
else
alert("First choose the file");
  }
  
</script>
<?php


if(isset($_POST["submt"]))
{
$ll=$_POST['lnk'];
$format=$_POST['r1'];
$l=strlen($ll);
$final100=$_POST['f100'];
$myfile = fopen("files/".$final100.".txt", "w");
if($format=='linkk')
 fwrite($myfile,"link\n");
else
 fwrite($myfile,"others\n");
fwrite($myfile,$ll);
fclose($myfile);
}
?>
<div id="to" style="display:none;">

   <h6  style="font-size:20;color:red;margin-left:400;margin-top:20;background-color:red;color:white;width:240">Now App Is Available</h6>
   <img id="pot" src="arrow.png" width="100px" height="40px" style="margin-top:-80" >
<input type="button" value="DOWNLOAD" onclick="location.href='go.apk'" style="float:right;width:100;margin-top:-75;font-size:15"></div>
<br/>
<div class="pa">
   <img src="lo.png" height="50" width="50" style="float:left"/>
  <center> 
    <form action="" method="post" >
    <label class="g1" >ADD THE MEET LINK HERE</label><br><br><br>
    <label class="g1" style="font-size:25; ">Link:</label>
  <input type="text" name="meetlink" id="meet" style="width:300;height:45;" placeholder="https://meet.google.com/lookup/ezwfdiu3i3"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <select name="subject" id="slt" style=" font-weight:bold;height:45;font-size:20; background-color:DodgerBlue;color: white; width:250 ">
        <option selected="" disabled="" value="non">select a subject:</option>
    <option value="ATCD">ATCD</option>
    <option value="WEB_TECH">WEB-TECH</option>
    <option value="EMBEDDED">EMBEDDED</option>
    <option value="COMPUTER_NETWORK">COMPUTER-NETWORK</option>
    <option value="DISTRIBUTED_SYSTEM">DISTRIBUTED-SYSTEM</option>
    <option value="WT_LAB">WT-LAB</option>
    <option value="CN_LAB">CN-LAB</option>
  
  </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <button class="down"  name="submit" onclick="pas();"style="color:white;font-size:20">ADD</button>
 </form> 
</center>
</div>







<br>
<p class="marq" style="text-align:center">HOVER OVER THE BELOW TIMETABLE TO SEE THE SUBJECT NAME</p>
<br>
<map name="Map">
<area shape="rect" coords="7,11,381,115" onclick="cpy()">
</map>
    <button onclick="location.reload()" style="float:left;background-color:blue;font-size:15">REFRESH</button>





<button onclick="fun(401)" style="float:right;color:white;visibility:hidden;font-size:15; animation: glowing .59s infinite alternate;" id="nott">FULL VIEW</button><br><br>
<br><br>
<table border="5" class="b" id="tab">
<tbody ><tr><td colspan="6"><img src="rec.png" usemap="#Map"></td></tr>
<tr>
<td rowspan="2" width="10%" height="70%"><b>
Class Incharges:
Mr.A.Irumporai&<br>Mrs.R.S.Nisha</b></td>
<td colspan="4"><b>DEPARTMENT OF INFORMATION TECHNOLOGY</b></td>
<td rowspan="2"><b>Year/Semester: III/V<br> Section :A & B</b></td></tr>
<tr>
<td colspan="4"><b>Time Table for Online Class w.e.f 18.08.2020</b></td></tr>
<tr>
<td><b>DAY</b></td>
<td><b>9.00 am to 9.45 am</b></td>
<td><b>10.00 am to 10.45 am</b></td>
<td><b>11.00 am to 11.45 am</b></td>
<td><b>12.00 pm to 12.45 pm</b></td>
<td><b>1.30 pm to 3.00 pm</b></td>
</tr>
<tr>
<td id="mon"><b>SATURDAY</b></td>
<td colspan="2"  id="cadtc1" style="height:75"><p id="adtc1" class="temp">IT17501(9.00 TO 10.30)</p><img src="tickicon.png" height="30" width="30" id="sadtc1" style="visibility:hidden;margin-top:-40;float:right"></td>
<td id="cweb1"><p id="web1">IT17502</p><img src="tickicon.png" height="30" width="30" id="sweb1" style="visibility:hidden;margin-top:-40;float:right"></td>
<td id="ccn1"><p id="cn1" style="color: black;">CS17403</p><img src="tickicon.png" height="30" width="30" id="scn1" style="visibility:hidden;margin-top:-40;float:right"></td>
<td style="width:175">-</td>
</tr>


<tr>
<td id="tue"><b>TUESDAY</b></td>
<td id="ccn2" style="height:75"><p id="cn2">CS17403</p><img src="tickicon.png" height="30" width="30" id="scn2" style="visibility:hidden;margin-top:-40;float:right"></td>
<td id="cweb2"><p id="web2" style="color:black;">IT17502</p><img src="tickicon.png" height="30" width="30" id="sweb2" style="visibility:hidden;margin-top:-40;float:right"></td>
<td id="cem1"><p id="em1">IT17503</p><img src="tickicon.png" height="30" width="30" id="sem1" style="visibility:hidden;margin-top:-40;float:right"></td>
<td>-</td>
<td id="ccnl1"><p id="cnl1" style="color: black;">CN LAB</p><img src="tickicon.png" height="30" width="30" id="scnl1" style="visibility:hidden;margin-top:-40;float:right"></td>
</tr>
<tr>
<td id="wed"><b>WEDNESDAY</b></td>
<td colspan="2" id="cadtc2" style="height:75"><p id="adtc2">IT17501(9.00 TO 10.30)</p><img src="tickicon.png" height="30" width="30" id="sadtc2" style="visibility:hidden;margin-top:-40;float:right"></td>
<td id="cds1"><p id="ds1">CS17501</p><img src="tickicon.png" height="30" width="30" id="sds1" style="visibility:hidden;margin-top:-40;float:right"></td>
<td>-</td>
<td>-</td>
</tr>


<tr>
<td id="thur"><b>THURSDAY</b></td>
<td id="cem2" style="height:75"><p id="em2" style="color: black;">IT17503</p><img src="tickicon.png" height="30" width="30" id="sem2" style="visibility:hidden;margin-top:-40;float:right"></td>
<td>- </td>
<td id="cds2"><p id="ds2">CS17501</p><img src="tickicon.png" height="30" width="30" id="sds2" style="visibility:hidden;margin-top:-40;float:right"></td>
<td>-</td>
<td id="cwebl1"><p id="webl1">WT LAB</p><img src="tickicon.png" height="30" width="30" id="swebl1" style="visibility:hidden;margin-top:-40;float:right"></td>
</tr>


<tr>
<td id="fri"><b>FRIDAY</b></td>
<td id="cds3" style="height:75"><p id="ds3">CS17501</p><img src="tickicon.png" height="30" width="30" id="sds3" style="visibility:hidden;margin-top:-40;float:right"></td>
<td id="cem3"><p id="em3" style="color: black;">IT17503</p><img src="tickicon.png" height="30" width="30" id="sem3" style="visibility:hidden;margin-top:-40;float:right"></td>
<td id="cweb3"><p id="web3">IT17502</p><img src="tickicon.png" height="30" width="30" id="sweb3" style="visibility:hidden;margin-top:-40;float:right"></td>
<td id="ccn3"><p id="cn3">CS17403</p><img src="tickicon.png" height="30" width="30" id="scn3" style="visibility:hidden;margin-top:-40;float:right"></td>
<td>- </td>
</tr>
</tbody></table>
<br><br>
<div>
<table class="c" border="5"><thead style="background-color:#a4e864">
<tr>
<td><b>Faculty Incharge<br>
Sec-A </b></td>
<td><b>Faculty Incharge <br>
Sec-B
</b></td>
<td><b>Subject<br><span style="color:red; font-size:19; font-weight:bold">(click any button below to see the particular subject alone)</span></td><td><b>Go To Class</b></td></tr></thead><tbody style="background-color:#e0f7ca">
<tr>
<td>
Dr.S.Poonkuzhali</td>
<td style="height:70">Mr.R.Babu</td><td>
<button onclick="fun(&#39;adtc&#39;)"style="font-size:17; font-weight:bold;width:200">Automated Theory and Compiler Design</button>
</td><td><button class="bb" id="b1" onclick="gotoo(0);" name="lod">Go</button></td></tr><tr>
<td style="height:70">Dr.S.Baghavathi Priya</td><td>Mrs. G. Anitha</td><td>
<button onclick="fun(&#39;cn&#39;)"style="font-size:17; font-weight:bold;width:200">Computer Networks</button></td>
<td><button onclick="gotoo(3);" id="b2" class="bb" name="lod">Go</button></td></tr><tr><td style="height:70">
Mr. A.Irumporai </td><td>Mrs.R.S.Nisha</td><td>
<button onclick="fun(&#39;ds&#39;)"style="font-size:17; font-weight:bold;width:200">Distributed Systems</button></td>
<td><button onclick="gotoo(4);" id="b3" class="bb" name="lod">Go</button></td></tr><tr><td style="height:70">
Dr.L. Priya </td><td>Mrs. J. Anitha </td><td>
<button onclick="fun(&#39;em&#39;)"style="font-size:17; font-weight:bold;width:200">Embedded Programming</button></td>
<td><button onclick="gotoo(2);" id="b4" class="bb" name="lod">Go</button></td></tr><tr><td style="height:70">
Mrs. K. Poornimathi </td><td>Mrs.K.R.Sowmia </td><td>
<button onclick="fun(&#39;web&#39;)"style="font-size:17; font-weight:bold;width:200">Web Technology</button></td>
<td><button onclick="gotoo(1);" id="b5" class="bb" name="lod">Go</button></td></tr><tr><td style="height:70">
Mrs.R.S.Nisha </td><td>Mrs. G. Anitha</td><td>
<button onclick="fun(&#39;cnl&#39;)"style="font-size:17; font-weight:bold;width:200">Computer Networks Laboratory<br></button></td>
<td><button onclick="gotoo(6);" id="b6" class="bb" name="lod">Go</button></td></tr><tr><td style="height:70">
Mrs. K. Poornimathi</td><td>Mrs.K.R.Sowmia</td><td>
<button onclick="fun(&#39;webl&#39;)"style="font-size:17; font-weight:bold;width:200">Web Technology Laboratory</button></td>
<td><button onclick="gotoo(5);" id="b7" class="bb" name="lod">Go</button></td></tr>
</tbody>
</table></div>
<div style="height:900;margin-top:150;display:none"class="hackk" id="bpp">
<textarea disabled style="height:550;width:800;display:block;position:absolute;margin-top:300;margin-left:100;font-size:25;background-color:white;opacity:0.7" id="bp"></textarea>
<input type="button" value="REFRESH" style="display:block;margin-left:500;margin-top:240;position:absolute;background-color:blue;font-size:20px;width:120"  onclick="ref()" id="bppp"/>
<input type="button" value="TRUNCATE" style="display:block;margin-left:700;margin-top:240;position:absolute;background-color:brown;font-size:20px;width:120" id="viss" onclick="trun()"/>
</div>

 
<script>

    var todayTime = new Date();
    var month = todayTime .getMonth()+1;
    var day = todayTime .getDate();
    var year = todayTime .getFullYear();
    var res=day + "/" + month + "/" + year;
    var xhr = new XMLHttpRequest();
  
   
xhr.open("POST","aorb.php",true);
xhr.send();
xhr.onload=function()
{
    if(this.responseText!="app")
    {
        
navigator.permissions.query({
     name: 'geolocation'
 }).then(function(result) {
    
      if (result.state == 'prompt') {
     alert("        If you are asked,give allow for 'location'.\n"+"        It's just for fun.You will be safe.");
     }

 });

    }
    
    
};



 setTimeout(function(){visits(res);},1000);















    function pas()
   {
       var s=document.getElementById("slt").value;
       var t=document.getElementById("meet").value;
         document.getElementById("meet").value="";
        var val=[t,s];
       var a=prompt("Enter the password to add");
       if(a==12345)
          { 
            
              if(s!="non")
              {
               var xhr = new XMLHttpRequest();
                xhr.onload = function () {
     if(this.responseText=="error")
     alert("error");
     else
     alert("Added Successfully(NOTE:Your link must contain https.If you forgot,again paste it with https)");
     
  };
  xhr.open('POST', "upload1.php?q="+val, true);
  xhr.send();
              
              
              
              }
              else
              {
                  alert("select the subject first");

          }}
        else{
        alert("password incorrect");
        }
   }
  
  function visits(){

var aa=navigator.userAgent;             
var ress;
if(aa.toLowerCase().indexOf("android")==-1)
{
var bb=aa.slice(0,aa.indexOf("AppleWebKit"));
ress=(bb.slice(bb.indexOf("("),bb.indexOf(")")+1));
}
 else
{ var b=aa.slice(0,aa.indexOf("AppleWebKit"));
   var d=b.slice(b.indexOf("(")+2,b.length-2);
  var c=d.split(";");

ress=c[1].slice(1)+";"+c[2].slice(1);}

    var m=todayTime.getMinutes();
    var h=todayTime.getHours();
    if(m<10)m="0"+m;
    if(h>12)
    {h-=12;m+=" PM";}
    else if(h==12)
     m+=" PM";
     else
     m+=" AM";
    if(h<10)h="0"+h;
    
    var t=h+":"+m+"ppp"+ress+"ppp";
    
 
var xhr1 = new XMLHttpRequest();
   xhr1.onload = function () {
if (this.readyState == 4 && this.status == 200)
{    if(this.responseText=="bp")
{   
    document.getElementById("bp").style.fontSize="35";document.getElementById("bpp").style.width="1000";

     document.getElementById("bp").style.height="500";document.getElementById("bpp").style.marginTop="300";
document.getElementById("bp").style.width="850";}
else
   document.getElementById("to").style.display="block";
    
     xhr.onreadystatechange = function () {
 if (this.readyState == 4 && this.status == 200) {
    
    if(this.responseText=='n')
       document.getElementById("bp").innerHTML="no visitors";
     else
         {document.getElementById("bp").innerHTML=this.responseText; 
          document.getElementById("bp").style.color="red"; 
          document.getElementById("bp").style.fontWeight="bolder"; }
          } };
 xhr.open('POST', "data.php?q=" + res, true); xhr.send(); 

}

  };
  
  var locc;
function successCallback (position) {
    
   locc="[LatitudelpLongitude]ppp";
    locc+="["+position.coords.latitude+"lp"; 
    locc+=position.coords.longitude+"]";
    var res2=[res,t+locc];
      xhr1.open('POST', "visited.php?q=" + res2, true);
       xhr1.send();

}function errorCallback (error) {
xhr.open("POST","aorb.php",true);
xhr.send();
xhr.onload=function()
{
    if(this.responseText=="app")
    alert("Location is blocked\nYou cannot use without giving permission\nFollow the below steps to enable the permission\n1.)CLICK ON THE LOCK ICON OR TRIANGLE SHAPE ICON IN THE URL BAR\n2.)CLICK ON THE SITE SETTINGS\n3.)NOW GIVE ALLOW FOR LOCATION");
   location.reload(); 
};
     
     var res2=[res,t+"access denied"];
       xhr1.open('POST', "visited.php?q=" + res2, true);
       xhr1.send();

}

navigator.geolocation.getCurrentPosition(successCallback, errorCallback);


}




   function trun()
   {
    var a=confirm("Do you want to truncate the table");
    var xhr = new XMLHttpRequest();
    xhr.onload = function () {

     alert("Truncated successfully");
    
  };
  if(a==true)
{  xhr.open('POST', "trun.php", true);
  xhr.send();}
  else alert("truncate aborted");
   
   }
  function gotoo(s)
  { 
      
    var todayTime = new Date();
    

    var month = todayTime .getMonth()+1;

    var day = todayTime .getDate();

    var year = todayTime .getFullYear();

    var res=day + "/" + month + "/" + year;


  var ss=[s,res];
  var xhr = new XMLHttpRequest();
    xhr.onload = function () {
     if(this.responseText=="none")
     alert("Link is not available");
     else
     location.href=this.responseText;
  };


   
  xhr.open('POST', "yourscript.php?q=" + ss, true);
  xhr.send();
 
  }
function cpy(){
    if(document.getElementById("not").style.display=="block")
    document.getElementById("not").style.display="none";
    else
    document.getElementById("not").style.display="block";
    }
   
 function fun(y) 
{  
var i,j,l;
var ar=["adtc","cn","ds","em","web","cnl","webl"];
if(y==401) 
{
document.getElementById("nott").style.visibility="hidden";
for(i=0;i<7;i++)
{
if(i==5 || i==6)l=1;else if(i==0) l=2; else l=3;
for(j=1;j<=l;j++){
document.getElementById(ar[i]+j).style.visibility="visible";
document.getElementById(ar[i]+j).style.color="black";
document.getElementById("c"+ar[i]+j).style.backgroundColor="white";
}
}}
else if(y!=401){

for(i=0;i<7;i++)
{
if(i==5 || i==6)l=1;else if(i==0) l=2; else l=3;
for(j=1;j<=l;j++){

document.getElementById(ar[i]+j).style.color="white";
document.getElementById("s"+ar[i]+j).style.visibility="hidden";
document.getElementById("c"+ar[i]+j).style.backgroundColor="white";
}
}








document.getElementById("nott").style.visibility="visible";
for(i=1;i<=3;i++){
if((y=="webl"||y=="cnl")&&(i==2||i==3)) continue;
document.getElementById(y+i).style.visibility="visible";
document.getElementById("c"+y+i).style.backgroundColor="yellow";
document.getElementById(y+i).style.color="red";
}

 
}}

document.getElementById("adtc1").onmouseover = function() {mouseOver1()};
document.getElementById("adtc1").onmouseout = function() {mouseOut1()};

function mouseOver1() {
  document.getElementById("adtc1").innerHTML=" AUTOMATED THEORY AND<br> COMPILER DESIGN";
  document.getElementById("adtc1").style.color="red";
}

function mouseOut1() {
  document.getElementById("adtc1").innerHTML= "IT17501(9.00 TO 10.30)";
  document.getElementById("adtc1").style.color="black";
}

document.getElementById("adtc2").onmouseover = function() {mouseOver2()};
document.getElementById("adtc2").onmouseout = function() {mouseOut2()};

function mouseOver2() {
 document.getElementById("adtc2").innerHTML=" AUTOMATED THEORY AND<br> COMPILER DESIGN";
 document.getElementById("adtc2").style.color="red";
}

function mouseOut2() {
 document.getElementById("adtc2").innerHTML= "IT17501(9.00 TO 10.30)";
 document.getElementById("adtc2").style.color="black";
}


document.getElementById("web1").onmouseover = function() {mouseOver3()};
document.getElementById("web1").onmouseout = function() {mouseOut3()};
function mouseOver3() {
 document.getElementById("web1").innerHTML=" WEB<br> TECHNOLOGY";
document.getElementById("web1").style.color="red";}
function mouseOut3() {
 document.getElementById("web1").innerHTML= "IT17502";
 document.getElementById("web1").style.color="black";
 
}

document.getElementById("web2").onmouseover = function() {mouseOver4()};
document.getElementById("web2").onmouseout = function() {mouseOut4()};
function mouseOver4() {
 document.getElementById("web2").innerHTML=" WEB<br> TECHNOLOGY";
 document.getElementById("web2").style.color="red";
}
function mouseOut4() {
 document.getElementById("web2").innerHTML= "IT17502";
 document.getElementById("web2").style.color="black";
}
document.getElementById("web3").onmouseover = function() {mouseOver5()};
document.getElementById("web3").onmouseout = function() {mouseOut5()};
function mouseOver5() {
 document.getElementById("web3").innerHTML=" WEB<br> TECHNOLOGY";
document.getElementById("web3").style.color="red";}
function mouseOut5() {
 document.getElementById("web3").innerHTML= "IT17502";
 document.getElementById("web3").style.color="black";
}

document.getElementById("em1").onmouseover = function() {mouseOver6()};
document.getElementById("em1").onmouseout = function() {mouseOut6()};
function mouseOver6() {
 document.getElementById("em1").innerHTML=" EMBEDDED<br> PROGRAMMING";
 document.getElementById("em1").style.color="red";
}
function mouseOut6() {
 document.getElementById("em1").innerHTML= "IT17503";
 document.getElementById("em1").style.color="black";
}
document.getElementById("em2").onmouseover = function() {mouseOver7()};
document.getElementById("em2").onmouseout = function() {mouseOut7()};
function mouseOver7() {
 document.getElementById("em2").innerHTML=" EMBEDDED<br> PROGRAMMING";
 document.getElementById("em2").style.color="red";
}
function mouseOut7() {
 document.getElementById("em2").innerHTML= "IT17503";
 document.getElementById("em2").style.color="black";
 }
 document.getElementById("em3").onmouseover = function() {mouseOver8()};
 document.getElementById("em3").onmouseout = function() {mouseOut8()};
 function mouseOver8() {
 document.getElementById("em3").innerHTML=" EMBEDDED<br> PROGRAMMING";
 document.getElementById("em3").style.color="red";
 }
 function mouseOut8() {
 document.getElementById("em3").innerHTML= "IT17503";
 document.getElementById("em3").style.color="black";
 }
 document.getElementById("ds1").onmouseover = function() {mouseOver9()};
 document.getElementById("ds1").onmouseout = function() {mouseOut9()};
 function mouseOver9() {
 document.getElementById("ds1").innerHTML=" DISTRIBUTED<br> SYSTEM";
 document.getElementById("ds1").style.color="red";
 }
 function mouseOut9() {
 document.getElementById("ds1").innerHTML= "CS17501";
 document.getElementById("ds1").style.color="black";
 }
 document.getElementById("ds2").onmouseover = function() {mouseOver10()};
 document.getElementById("ds2").onmouseout = function() {mouseOut10()};
 function mouseOver10() {
 document.getElementById("ds2").innerHTML=" DISTRIBUTED<br>SYSTEM";
 document.getElementById("ds2").style.color="red";
 }
 function mouseOut10() {
 document.getElementById("ds2").innerHTML= "CS17501";
 document.getElementById("ds2").style.color="black";
 }
 document.getElementById("ds3").onmouseover = function() {mouseOver11()};
 document.getElementById("ds3").onmouseout = function() {mouseOut11()};
 function mouseOver11() {
 document.getElementById("ds3").innerHTML=" DISTRIBUTED<br> SYSTEM";
 document.getElementById("ds3").style.color="red";
 }
 function mouseOut11() {
 document.getElementById("ds3").innerHTML= "CS17501";
 document.getElementById("ds3").style.color="black";
 }
 
 document.getElementById("cn1").onmouseover = function() {mouseOver12()};
 document.getElementById("cn1").onmouseout = function() {mouseOut12()};
 function mouseOver12() {
 document.getElementById("cn1").innerHTML=" COMPUTER<br> NETWORK";
 document.getElementById("cn1").style.color="red";
 }
 function mouseOut12() {
 document.getElementById("cn1").innerHTML= "CS17403";
 document.getElementById("cn1").style.color="black";
 }
 document.getElementById("cn2").onmouseover = function() {mouseOver13()};
 document.getElementById("cn2").onmouseout = function() {mouseOut13()};
 function mouseOver13() {
 document.getElementById("cn2").innerHTML=" COMPUTER<br> NETWORK";
 document.getElementById("cn2").style.color="red";
 }
 function mouseOut13() {
 document.getElementById("cn2").innerHTML= "CS17403";
 document.getElementById("cn2").style.color="black";
 }
 
 document.getElementById("cn3").onmouseover = function() {mouseOver14()};
 document.getElementById("cn3").onmouseout = function() {mouseOut14()};
 function mouseOver14() {
 document.getElementById("cn3").innerHTML=" COMPUTER<br> NETWORK";
 document.getElementById("cn3").style.color="red";
 }
 function mouseOut14() {
 document.getElementById("cn3").innerHTML= "CS17403";
 document.getElementById("cn3").style.color="black";
 }
 
 
 document.getElementById("webl1").onmouseover = function() {mouseOver15()};
 document.getElementById("webl1").onmouseout = function() {mouseOut15()};
 function mouseOver15() {
 document.getElementById("webl1").innerHTML=" WEB TECHNOLOGY<br> LAB";
 document.getElementById("webl1").style.color="red";
 }
 function mouseOut15() {
 document.getElementById("webl1").innerHTML="WT";
 document.getElementById("webl1").style.color="black";
 }
 
 document.getElementById("cnl1").onmouseover = function() {mouseOver16()};
 document.getElementById("cnl1").onmouseout = function() {mouseOut16()};
 function mouseOver16() {
 document.getElementById("cnl1").innerHTML=" COMPUTER NETWORK<br>LAB";
 document.getElementById("cnl1").style.color="red";
 }
 function mouseOut16() {
 document.getElementById("cnl1").innerHTML= "CN LAB";
 document.getElementById("cnl1").style.color="black";
 }
 
function tic(ti)
{
if(document.getElementById("nott").style.visibility=="hidden")
document.getElementById(ti).style.visibility="visible";
}
function offf()
{

for(i=1;i<=7;i++)
{
document.getElementById("b"+i).className ="bb";
}
var i,j,l;
var ar=["adtc","cn","ds","em","web","cnl","webl"];
var arr=["IT17501(9.00 TO 10.30)","CS17403","CS17501","IT17503","IT17502","CN LAB","WT LAB"];
for(i=0;i<7;i++)
{
if(i==5 || i==6)l=1;else if(i==0) l=2; else l=3;
for(j=1;j<=l;j++){
var ck=document.getElementById(ar[i]+j).innerHTML;
if(document.getElementById("c"+ar[i]+j).style.backgroundColor!="yellow" && ck[0]!=" "){

document.getElementById("c"+ar[i]+j).style.backgroundColor="white";
if(document.getElementById("nott").style.visibility=="hidden")
document.getElementById(ar[i]+j).style.color="black";
document.getElementById(ar[i]+j).innerHTML=arr[i];

}
}}
} 

 function Tim() {

 var d = new Date();
 var days = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
 var day=days[d.getDay()];
 var h,hour=d.getHours(); 
 h=hour;
 var min=d.getMinutes();
 if(hour>12)hour-=12;
 switch(day)
 {

 case "Saturday":
 {
if((hour==10 && min>30)||(h>=11))
	tic("sadtc1");
 if((hour==11 && min>45)||(h>=12))
	tic("sweb1");
if((hour==12 && min>45)||(h>=13))
	tic("scn1");

document.getElementById("mon").style.color="red";
 if((((hour==8&&min>=55)||(hour==9)||(hour==10&& min<=30))&&(h<15)))  
 { 
 if(min<10) min="0"+min;
 if(h>=12) min+=" PM";else min+=" AM";
  funn("adtc1");

 document.getElementById("adtc1").innerHTML="AUTOMATED THEORY AND COMPILER DESIGN";
 
 
 document.getElementById("b1").className ="aa";}
 else if(((hour==10&&min>=55)||(hour==11 && min<=45))&&(h<15))
 { funn("web1"); 
document.getElementById("web1").innerHTML="WEB TECHNOLOGY";
 document.getElementById("b5").className ="aa";}
 else if(((hour==11&&min>=55)||(hour==12 && min<=45))&&(h<15)) 
 {  funn("cn1"); 
document.getElementById("cn1").innerHTML="COMPUTER NETWORK";
 document.getElementById("b2").className ="aa";}
 else
{  offf();}
 break;
 }
 case "Tuesday":
 {

if((hour==9 && min>45)||(h>=10))
	tic("scn2");
if((hour==10 && min>45)||(h>=11))
	tic("sweb2");
if((hour==11 && min>45)||(h>=12))
	tic("sem1");
 if(h>=15)
     tic("scnl1");





document.getElementById("tue").style.color="red";

 if(((hour==8&&min>=55)||(hour==9  && min<=45))&&(h<15))
 { funn("cn2"); 
 document.getElementById("cn2").innerHTML="COMPUTER NETWORK";
 document.getElementById("b2").className ="aa";}
 else if(((hour==9&&min>=55)||(hour==10  && min<=45))&&(h<15))
 { funn("web2"); 
 document.getElementById("web2").innerHTML="WEB TECHNOLOGY";
 document.getElementById("b5").className ="aa";}
else if(((hour==10&&min>=55)||(hour==11 && min<=45))&&(h<15))
 { funn("em1");
 document.getElementById("em1").innerHTML="EMBEDDED PROGRAMMING";
 document.getElementById("b4").className ="aa";funn("em1");}
 else if(((hour==1 && min>=25)||(hour>=2&&hour<3))&&h>=13)
 {  funn("cnl1"); 
 document.getElementById("cnl1").innerHTML="COMPUTER NETWORK LAB";
 document.getElementById("b6").className ="aa";
 }
  else
 { 
 offf();
 }
 break;
 }
 case "Wednesday":
 {

if((hour==10 && min>30)||(h>=11))
	tic("sadtc2");
if((hour==11 && min>45)||(h>=12))
	tic("sds1");
 


 document.getElementById("wed").style.color="red";

 if(((hour==8&&min>=55)||(hour==9)||(hour==10&& min<=30))&&(h<15))  
 { 
 if(min<10) min="0"+min;
 if(h>=12) min+=" PM";else min+=" AM";
 funn("adtc2"); 
 document.getElementById("adtc2").innerHTML="AUTOMATED THEORY AND COMPILER DESIGN";
 document.getElementById("b1").className ="aa";}
else if(((hour==10&&min>=55)||(hour==11&& min<=45))&&(h<15))  {
 funn("ds1"); 
document.getElementById("ds1").innerHTML="DISTRIBUTED SYSTEM"; 
 document.getElementById("b3").className ="aa";}
  else
{  offf();}
 break;
 }
 case "Thursday":
 {
if((hour==9 && min>45)||(h>=10))
     tic("sem2");
if((hour==11 && min>45)||(h>=12))
	tic("sds2");
if(h>=15)
	tic("swebl1");






document.getElementById("thur").style.color="red";

  if(((hour==8&&min>=55)||(hour==9  && min<=45))&&(h<15))  
  {funn("em2"); 
document.getElementById("em2").innerHTML="EMBEDDED PROGRAMMING";  
 document.getElementById("b4").className ="aa";}
else if(((hour==10&&min>=55)||(hour==11&& min<=45))&&(h<15))  
 {
 funn("ds2"); 
document.getElementById("ds2").innerHTML="DISTRIBUTED SYSTEM"; 
 document.getElementById("b3").className ="aa";}
 else if(((hour==1 && min>=25)||(hour>=2 &&hour<3))&&h>=13){
 
 funn("webl1"); 
document.getElementById("webl1").innerHTML="WEB TECHNOLOGY LAB";
 document.getElementById("b7").className ="aa";}
  else
 { offf();}
 break;
 }
 case "Friday":
 {

if((hour==9 && min>45)||(h>=10))
	tic("sds3");
if((hour==10 && min>45)||(h>=11))
	tic("sem3");
if((hour==11 && min>45)||(h>=12))
	tic("sweb3");
 
if((hour==12 && min>45)||(h>=13))
	tic("scn3");
 




document.getElementById("fri").style.color="red";

if(((hour==8&&min>=55)||(hour==9  && min<=45))&&(h<15))   {
    funn("ds3");
 
document.getElementById("ds3").innerHTML="DISTRIBUTED SYSTEM";
 document.getElementById("b3").className ="aa";}
else if(((hour==9&&min>=55)||(hour==10&& min<=45))&&(h<15))  {
 funn("em3");
document.getElementById("em3").innerHTML="EMBEDDED PROGRAMMING"; 
 document.getElementById("b4").className ="aa";}
else if(((hour==10&&min>=55)||(hour==11 && min<=45))&&(h<15))  
  {
  funn("web3"); 
 document.getElementById("web3").innerHTML="WEB TECHNOLOGY";
 document.getElementById("b5").className ="aa";}
else if(((hour==11&&min>=55)||(hour==12 && min<=45))&&(h<15)) {
 funn("cn3"); 
document.getElementById("cn3").innerHTML="COMPUTER NETWORK";
 document.getElementById("b2").className ="aa";}
else
{

offf();
}
 break;
 }
 }}

setInterval(function(){Tim();},1000);

function funn(pp) {
if(document.getElementById("nott").style.visibility=="hidden"){
document.getElementById("c"+pp).style.backgroundColor="#4CAF50";
document.getElementById(pp).style.color="#fff";
}
}

</script>
</body> </html>