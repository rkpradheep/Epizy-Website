<?php
// unlink("log.html");
session_start();
 
if(isset($_GET['logout'])){    
     
    //Simple exit message
    $logout_message = "<b style='color:red'>". $_SESSION['name'] ." left the chat</b><br><br>";
    file_put_contents("log.html", $logout_message, FILE_APPEND | LOCK_EX);
     
    session_destroy();
    header("Location: firebaseindex.php"); //Redirect the user
}
 
if(isset($_POST['enter'])){
    if($_POST['name'] != ""){
        $_SESSION['name'] = stripslashes(htmlspecialchars($_POST['name']));
	 $login_message = "<b style='color:green'>".$_POST['name'] ." joined the chat</b><br><br>";
    file_put_contents("log.html", $login_message, FILE_APPEND | LOCK_EX);
    }
    else{
        echo '<span class="error">Please type in a name</span>';
    }
}
if(isset($_POST['del'])){
    unlink("log.html");
}
 
function loginForm(){
    echo
    '<div id="loginform">
    	<div id="loginformalign">
    <p>Please enter your name to join the chat</p>
    <form action="firebaseindex.php" method="post" autocomplete="off">
      <label for="name">Name </label>
      <input type="text" name="name" id="name" />
      <input type="submit" name="enter" id="enter" value="Join" />
    </form>
    </div>
  </div>';
}
 
?>
 
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
       <meta name="viewport"  content="width=device-width,initial-scale=1.0,user-scalable=no"/>
        <link rel="stylesheet" href="s.css" />
   <title>Let's Chat</title>
    </head>
    <body>
    <?php
    if(!isset($_SESSION['name'])){
        loginForm();

    }
    else{
        ?>
        <div id="wrapper">
            <div id="menu">
                <p class="welcome">Welcome, <b><?php echo $_SESSION['name']; ?></b></p>
                <p class="logout"><a id="exit" href="#">Quit Chat</a></p>
            </div>
 
            <div id="chatbox">
            <?php
            if(file_exists("log.html") && filesize("log.html") > 0){
                $contents = file_get_contents("log.html");          
                echo $contents;
            }
            ?>
            </div>
 
            <form name="message" action="" autocomplete="off" onkeydown="return event.key!='Enter';">
                <input name="usermsg" type="text" id="chbox" style="outline:none" />
               <input type="file" id="file" name="files">
                <input type="button" onclick="go()" id="send" style="background-image: url('send.png');background-size:100% 100%;width: 50px;height: 50px;
   border: none;" value=""/>
				<progress id="progress" value="0" max="100" style="position:absolute;height:20;margin-left:170px;margin-top:70px ;display:none"></progress>
<br><p id="filename" style="position:absolute;margin-left:200px;margin-top:50px;font-weight:bold;color:green"></p>
            </form>
        </div>
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
function go()
{   var todayTime=new Date();
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
    
    var time=h+":"+m;
		
var myfile=document.querySelector("#file").files[0],url=null,fname=null,progress=0;
if(myfile!=null)
{
document.getElementById("progress").style.display="block";	
document.getElementById("send").disabled=true;;	

fname=myfile.name;
var storageRef = firebase.storage().ref();
var metadata = {
contentType:myfile.type,
};

var uploadTask = storageRef.child(myfile.name).put(myfile, metadata);

uploadTask.on('state_changed', function(snapshot){
       progress = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
       document.getElementById("progress").value=progress;
        
}, function(error) {

},
function() {
   uploadTask.snapshot.ref.getDownloadURL().then(function(downloadURL) {
   url=downloadURL;

                    var clientmsg =null;
					clientmsg=$("#chbox").val();
                    $.post("post.php", { text: clientmsg,Time:time,Url:url,Fname:fname,Ftype:myfile.type});
				   $("#chbox").val("");
				   document.getElementById("progress").style.display="none";	
				   document.getElementById("send").disabled=false;
				   document.getElementById("file").value=null;
				    document.getElementById("filename").innerHTML='';



  });
});

    }
	
	
	
	else if($("#chbox").val()){
                    var clientmsg = $("#chbox").val();
                    $.post("post.php", { text: clientmsg,Time:time,Url:url,Fname:fname});
				   $("#chbox").val("");
				 
	}

                  
}
          
            $(document).ready(function () {
            
                function loadLog() {
                    var oldscrollHeight = $("#chatbox")[0].scrollHeight; 
			
               if(document.querySelector("#file").files[0]!=null)
  
				document.getElementById("filename").innerHTML=document.querySelector("#file").files[0].name;
                   
                    $.ajax({
                        url: "log.html",
                        cache: false,
                        success: function (html) {
                        $("#chatbox").html(html); 
                   
                                     
                            var newscrollHeight = $("#chatbox")[0].scrollHeight; 
					

                           if(newscrollHeight > oldscrollHeight){
                               $("#chatbox").animate({ scrollTop:newscrollHeight  }, 'normal'); 
                             }   
                        }
                    });
                }
 
                setInterval (loadLog, 500);
 
                $("#exit").click(function () {
                    var exit = confirm("Are you sure you want to end the chat?");
                    if (exit == true) {
                    window.location = "firebaseindex.php?logout=true";
                    }
                });
            });
        </script>
    </body>
</html>
<?php
    }
    ?>