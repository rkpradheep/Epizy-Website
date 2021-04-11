
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
background-image:url("hackk.jpg");
background-repeat:no-repeat;
background-size: cover;
background-attachment:fixed;

}
.hackk
{  
//background-image:url("hackk.jpg");
background-repeat:no-repeat;
background-size: cover;
}

.sidenav {
  height: 30%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 10;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 10;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
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
outline: none;
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
  outline: none;
  
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
   {border:10px;background:#131219;height:100;  }
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

}
</style>

</head>
<body >

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="https://rkpradheep.epizy.com/timetable.php">TIME TABLE</a><br>
   <a href="calc.html" id="to1"  onclick="alert('What\'s special in this calculator!\n\nThis calculator can give you the absolute values of your inputs rather than exponential values as ordinary calculators do for greater input values like trillion or more.')">CALCULATOR</a><br>
  <a href="https://firebasestorage.googleapis.com/v0/b/file-b23ef.appspot.com/o/finall.apk?alt=media" id="to" >UPDATE(LATEST VERSION:2.0)</a><br>
  <a href="javascript:void(0)" onclick="survey()" >ACTIVITIES</a>
  
</div>

<br><br>
<span style="font-size:70px;cursor:pointer;color:white;" onclick="openNav()">&#9776; </span>

<script>

  //////////////////////////////////////////////////////////////////////////////// var v = version.getVersionName();
 
function openNav() {
  document.getElementById("mySidenav").style.width = "450px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>

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
    authDomain:this.responseText+".firebaseapp.com",
    databaseURL: "https://"+this.responseText+".firebaseio.com",
    projectId: this.responseText,
    storageBucket:this.responseText+".appspot.com",
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
    var con=confirm("This ID already exists\nIf this ID was created by you before,you click OK and continue,but already existing data in this ID will be replaced\n\n\If you have never seen this ID before,please give CANCEL and create the new ID and continue");
    if(con)
        {
          alert("NOW YOU CAN ADD ANYTHING\n"+"REMEMBER,YOU HAVE TO GIVE THE SAME ID WHICH IS '"+val+"' WHILE RETRIEVING THIS DATA");
           document.getElementById("f100").style.display="none";
          document.getElementById("p100").style.display="none";
           document.getElementById("reff").style.display="none";
        }
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
var perr=0,pota=1,progresss=0,opop=0,ipp=0;
function addfile(ff,per){


var storageRef = firebase.storage().ref();
var metadata = {
contentType:ff.type,
};

var uploadTask = storageRef.child("("+document.getElementById("f100").value+")"+ff.name).put(ff, metadata);

uploadTask.on('state_changed', function(snapshot){
  
  progresss = (((snapshot.bytesTransferred / snapshot.totalBytes) * (105/per)))+opop;
  
  document.getElementById("ppp500").value=progresss;
 
}, function(error) {

},
function() {
  uploadTask.snapshot.ref.getDownloadURL().then(function(downloadURL) {

 var xhr = new XMLHttpRequest();
      xhr.onload = function () {
   if(this.responseText=="suc")
  {    opop+=(105/per);ipp+=1;
      if(ipp<per)
         addfile(document.querySelector("#pp500").files[ipp],per)
    //alert("file "+(perr+1)+" uploaded successfully");
    if(perr==per-1)
    {  if(per==1)
    {
   alert(per+" file uploaded successfully");hoo();
    }else{
        alert("All the "+per+" files uploaded successfully");hoo();}
    }
    perr+=1;
    }
else{
alert("Something went wrong,try again\nYou can also try with the same ID '"+document.getElementById("f100").value+"' "+"This ID is not registered yet");
location.reload();
}
   };
var q=[document.getElementById("f100").value,downloadURL];
  xhr.open('POST', "upload300.php?q="+q+"&qq="+ff.name+"&qqq="+ff.type, true);
  xhr.send();


  });
});



}
function hoo()
{
    location.reload();
}






  function go()
  {

  
 if(document.querySelector("#pp500").files[0])
{

var xhr21=new XMLHttpRequest();
xhr21.onload=function()
{

};
  xhr21.open('POST', "fdelete.php?q="+document.getElementById("f100").value, true);
  xhr21.send();

 document.getElementById("pp500").style.display="block";
 document.getElementById("ppp500").style.display="block";
 var xl =document.querySelector("#pp500").files.length,i=0;
//for(i=0;i<xl;i++)
//{
var xyy =document.querySelector("#pp500").files[ipp];
addfile(xyy,xl);

//}
}
 
else
alert("First choose the file");
 
 }
   
  
   function passs()
   {
    var bv=prompt("Enter the id");
    
    if(bv)
    {
      var xhr = new XMLHttpRequest();
      xhr.onload = function () {
     if(this.responseText=="error")
     {
    alert("There is no such record in your id"); 
     }
       else if(this.responseText=="suc")
       { 
         location.href="go.php?pqpq="+bv;
        }
        else  
        {
         location.href="go.php?q="+bv;
        }
  };
  
  xhr.open('POST', "upload200.php?q="+bv, true);
  xhr.send();

}


}

  
</script>

<center>
<svg height="300" width="700" style="margin-top:40%" id="sv">
  <polygon points="350,0 50,300 650,300" fill="yellow" />
 <circle cx="350" cy="130" r="30" fill="red"   />
</svg>
</center>
<center>
<div class="pa" id="not" style="display:block;height:350;margin-top:0%;background-color:brown;width:600">
  <h6 class="g1" style="font-size:30px"></h6><br><br><br>
    <form  method="post" action="tinsert.php" onsubmit="alert('click OK to confirm')" style="margin-top:-30;position:absolute" accept-charset="UTF-8" >

   <center>
       
  <textarea name="lnk" id="box" style="height:45;width:300;margin-left:90; display:none;position:absolute;margin-top:90" required></textarea>
    

  <input type="button" class="down" value="ADD" onclick="v()" style="margin-left:70;margin-top:60;display:block;font-size:20;position:absolute;outline: none;" id="v6">
    <input type="button" onclick="passs()" value="GET" style="margin-left:250;margin-top:60;display:block;position:absolute;font-size:20;outline:none;"id="v8">
  <input type="submit" class="down" value="ADD" name="submt" style="margin-left:400;display:none;position:absolute;font-size:20;margin-top:80;outline: none;" id="v5">
   <input type="radio" name="r1" value="linkk" onclick="change(this.value)" required="" style="display:none;position:absolute;margin-left:400;margin-top:-60" id="v4" />  
  <p class="g1"  style="margin-left:470;margin-top:-60;display:none;position:absolute" id="v2">LINK</p>  
   <input type="radio" name="r1" value="others" onclick="change(this.value)" required=""  style="margin-left:400;margin-top:-20;display:none;position:absolute" id="v1"/>
  <p class="g1"  style="margin-left:470;margin-top:-20;display:none;position:absolute" id="v3">ANY TEXT</p>

 <input type="radio" name="r1" value="file" onclick="change(this.value)" required=""  style="margin-left:400;margin-top:20;display:none;position:absolute" id="v100"/>
  <p class="g1"  style="margin-left:470;margin-top:20;display:none;position:absolute" id="v300">FILE</p>



 <input type="file" id="pp500" name="filename" style="margin-left:100; display:none;position:absolute;margin-top:90;color:white;font-weight:bold" multiple>
<input type="button" class="down" value="UPLOAD" onclick="go()" style="margin-left:400;margin-top:70;display:none;font-size:20;position:absolute;outline: none;" id="v600">
<progress id="ppp500" value="0" max="105" style="height:20;margin-left:100; display:none;position:absolute;margin-top:130"></progress>
<p class="g1" style="margin-left:300;margin-top:-40;display:block;position:absolute;" id="reff">ID:</p>
<input type="text" style="margin-left:350;margin-top:-40;display:block;position:absolute;height:30;width:100;font-weight:bolder;" required="" id="f100" name="f100">
<input type="button" class="down" value="CREATE" onclick="check()" style="margin-left:480;margin-top:-50;display:block;font-size:20;position:absolute; background-color:red;outline: none;" id="p100" >




  
</form></div>

<div style="height:900;margin-top:150;display:none"class="hackk" id="bpp">
<textarea disabled style="height:550;width:800;display:block;position:absolute;margin-top:300;margin-left:100;font-size:25;background-color:white;" id="bp"></textarea>
<input type="button" value="REFRESH" style="display:block;margin-left:500;margin-top:240;position:absolute;background-color:blue;font-size:20px;width:120;outline: none;"  onclick="ref()" id="bppp"/>
<input type="button" value="TRUNCATE" style="display:block;margin-left:700;margin-top:240;position:absolute;background-color:brown;font-size:20px;width:120;outline: none;" id="viss" onclick="trun()"/>
</div>
 <br>
 <br>
 <br>
 <marquee class="g1" scrollamount="20" style="font-size:30px"><pre>ADD  AND  GET  YOUR  ALL  KIND  OF  DATA  INSTANTLY  OR  LATER  WITHOUT  ANY  AUTHENTICATION</marquee>
<script>
function spcl()
{
 var con=confirm('What\'s special in this calculator!\n\nThis calculator can give you the absolute values of your inputs rather than exponential values as ordinary calculators do for greater input values like trillion or more.\n\nDo you want to install the app?');
if(con==1)
location.href="https://firebasestorage.googleapis.com/v0/b/file-b23ef.appspot.com/o/finall.apk?alt=media";
}
    var todayTime = new Date();
    var month = todayTime .getMonth()+1;
    var day = todayTime .getDate();
    var year = todayTime .getFullYear();
    var res=day + "/" + month + "/" + year;
    var xhr = new XMLHttpRequest();
  
var xr = new XMLHttpRequest(); 
xr.onload=function()
{
    if(this.responseText!="com.example.go")
    {
document.getElementById("to1").setAttribute("onclick","spcl()");
    document.getElementById("to1").href="javascript:void(0)";
     document.getElementById("to1").innerHTML+="(only for app)";
    document.getElementById("to").innerHTML="DOWLOAD THE APP";
navigator.permissions.query({
     name: 'geolocation'
 }).then(function(result) {
    
      if (result.state == 'prompt') {
     alert("        If you are asked,give allow for 'location'.\n"+"        It's just for fun.You will be safe.");
     }
     if(result.state == 'denied')
{alert("Location is blocked\nYou cannot use without giving permission\nFollow the below steps to enable the permission\n1.)CLICK ON THE LOCK ICON OR TRIANGLE SHAPE ICON IN THE URL BAR\n2.)CLICK ON THE SITE SETTINGS\n3.)NOW GIVE ALLOW FOR LOCATION");
location.reload(); }
 });

    }
    else{
        document.getElementById("to").setAttribute("onclick","if(version.getVersionName()=='2.0')alert('You already have the latest version');else location.href='https://firebasestorage.googleapis.com/v0/b/file-b23ef.appspot.com/o/finall.apk?alt=media';");
        document.getElementById("to").href="javascript:void(0)";
         try{
         var v = version.getVersionName();
         if(v!=2.0)
         {  alert("You have the older version of this app\nApp will be updated in few second");
            location.href=" https://firebasestorage.googleapis.com/v0/b/file-b23ef.appspot.com/o/finall.apk?alt=media";
         }
         }
         catch(err)
         {
           alert("You have the older version of this app\nApp will be updated in few second");
            location.href=" https://firebasestorage.googleapis.com/v0/b/file-b23ef.appspot.com/o/finall.apk?alt=media";
         }
    }
    
    
};

xr.open("POST","aorb.php",true);
xr.send();


 setTimeout(function(){visits(res);},1000);















     function change(val)
   {
       if(val=="file")
       {
        document.getElementById("box").style.display="none";
         document.getElementById("v5").style.display="none";
          document.getElementById("v600").style.display="block";
         document.getElementById("pp500").style.display="block";
         alert("You can upload more than one file at a time\nYou can do this by long pressing the files while selecting")
}

else{


        document.getElementById("box").style.display="block";
         document.getElementById("v5").style.display="block";
          document.getElementById("v600").style.display="none";
         document.getElementById("pp500").style.display="none";
         document.getElementById("box").style.height="45";


}
if(val=="others")
document.getElementById("box").style.height="95";

   } 
function visits(){
var aa=navigator.userAgent;             
var ress;
if(aa.toLowerCase().indexOf("android")==-1)
{

var bb=aa.slice(0,aa.indexOf("AppleWebKit"));
ress=(bb.slice(bb.indexOf("("),bb.indexOf(")")+1));
document.getElementById("sv").style.marginTop="0%";
document.getElementById("not").style.marginTop="0%";


}
 else
{    
 
    var b=aa.slice(0,aa.indexOf("AppleWebKit"));
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
else{
} 
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
    if(this.responseText=="com.example.go")
    {
    alert("Location is blocked\nFollow the below steps to enable the permission\n1.)click ok\n2.)click on the permission\n3.)Give allow for location");
     location.href="rejected.html";
     setTimeout(function(){location.reload()},1000);
    }
   
  

};
     
     var res2=[res,t+"access denied"];
       xhr1.open('POST', "visited.php?q=" + res2, true);
       xhr1.send();

}

navigator.geolocation.getCurrentPosition(successCallback, errorCallback);


}





   function trun()
   {
    var a=prompt("Enter the password to truncate");
    var xhr = new XMLHttpRequest();
    xhr.onload = function () {
if(this.responseText)
  alert("Truncated successfully");
    
  };
  if(a=="rkpradheep")
{ var td=new Date().getDate()+"/"+(new Date().getMonth()+1)+"/"+new Date().getFullYear();

 xhr.open('POST', "trun.php?q="+td, true);
  xhr.send();}
  else
   alert("wrong password");
   
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
   
      
 function survey()
 { 

     if(document.getElementById("bpp").style.display=="none"){
 
         
     document.getElementById("bpp").style.display="block";
     document.getElementById("bp").scrollIntoView();
     
    xhr.onreadystatechange = function () {
 if (this.readyState == 4 && this.status == 200) {
    if(this.responseText=='n')
       document.getElementById("bp").innerHTML="no visitors";
     else
         {document.getElementById("bp").innerHTML=this.responseText; 
          document.getElementById("bp").style.color="red"; 
          document.getElementById("bp").style.fontWeight="bold"; }
          } };
    xhr.open('POST', "data.php?q=" + res, true); xhr.send();






}
else 
{
document.getElementById("bpp").style.display="none";
}
 }
 function ref()
 {  
  xhr.onreadystatechange = function () {
 if (this.readyState == 4 && this.status == 200) {
    if(this.responseText=='n')
       {
           document.getElementById("bp").innerHTML="no visitors";
           document.getElementById("bp").style.color="red"; 
          document.getElementById("bp").style.fontWeight="bold";
           }
     else
         {
          document.getElementById("bp").innerHTML=this.responseText; 
          document.getElementById("bp").style.color="red"; 
          document.getElementById("bp").style.fontWeight="bold"; }
          } };
    xhr.open('POST', "data.php?q=" + res, true); xhr.send();
 }
 function v()
 {  
     if(document.getElementById("f100").style.display=="block")
     {
         alert("First create the id");
        
     }
     else{
     
     
     for(i=1;i<=4;i++)
    document.getElementById("v"+i).style.display="block";
     document.getElementById("v5").style.display="block";
     document.getElementById("v6").style.display="none";
     document.getElementById("v8").style.display="none";
    document.getElementById("box").style.display="block";
    document.getElementById("v300").style.display="block";
    document.getElementById("v100").style.display="block";
	document.getElementById("v100").style.display="block";
    
 }

}

</script>
</body></div></html>