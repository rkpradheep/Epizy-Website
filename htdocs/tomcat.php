<?php

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);


if(!empty($_GET['state']) && $_GET['state'] != 'testing')
{
header("Location: ".$_GET['state']."?code=".$_GET['code']);
return;
}

require 'dbConnectionUtil.php';

while($r=mysqli_fetch_assoc(executeSelectQuery("select * from tomcat"))){
$ip = $r['ip'];
$token = $r['token'];
$expiryTime = $r['expiry_time'];
$refreshToken= $r['refresh_token'];
$refreshTokenExpiryTime = $r['refresh_token_expiry_time'];
$clientSecret = $r['client_secret'];
break;
}


$currentTime = time();

if(!empty($_GET['code']))
{
    $refreshTokenUsingCodeUrl = "https://oauth2.googleapis.com/token?code=".$_GET['code']."&client_id=703056969805-451ottjte2q196cf23fm12jjrfspodl8.apps.googleusercontent.com&client_secret=".$clientSecret."&redirect_uri=https://rkpradheep.epizy.com/tomcat&grant_type=authorization_code";

      $response = json_decode(APIcall($refreshTokenUsingCodeUrl, 'POST', null), true);
      //$response = APIcall($refreshTokenUsingCodeUrl, 'POST', null);
      echo $response;
      $refreshToken = $response['refresh_token'];
      $refreshTokenExpiryTime = $currentTime + (3600*24*6);
      executeQuery("update tomcat set refresh_token='$refreshToken', refresh_token_expiry_time='$refreshTokenExpiryTime'");
      header("Location: /tomcat");
}
else
{
$computeEngineUrl="https://compute.googleapis.com/compute/v1/projects/tomcat-413307/zones/us-central1-f/instances/instance-1";

$refreshTokenUrl="https://oauth2.googleapis.com/token?client_id=703056969805-451ottjte2q196cf23fm12jjrfspodl8.apps.googleusercontent.com&client_secret=".$clientSecret."&grant_type=refresh_token&refresh_token=". $refreshToken;

$isValidIP =  APIcall('http://'.$ip.'/_app/health', 'GET', null);

if($isValidIP != "true")
{

   if($expiryTime < $currentTime || empty($token))
   {
       if($refreshTokenExpiryTime < $currentTime)
       {
           if (!isset($_SERVER['HTTPS']))
            {
                header("Location: https://rkpradheep.epizy.com/tomcat");
                return;
            }
            else{
           header("Location: https://accounts.google.com/o/oauth2/v2/auth?scope=https://www.googleapis.com/auth/compute.readonly&client_id=703056969805-451ottjte2q196cf23fm12jjrfspodl8.apps.googleusercontent.com&state=testing&response_type=code&redirect_uri=https://rkpradheep.epizy.com/tomcat&access_type=offline&prompt=consent");
           return;
            }
       }

       $token= json_decode(APIcall($refreshTokenUrl, 'POST', null), true)['access_token'];
       $expiryTime = $currentTime + 3597;

   }

   $ip = json_decode(APIcall($computeEngineUrl, 'GET', $token), true)['networkInterfaces'][0]['accessConfigs'][0]['natIP'];

   if(!empty($token) && !empty($ip))
   {
    executeQuery("update tomcat set ip='$ip',token='$token', expiry_time='$expiryTime'");
   }

}


if (isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') {
    $protocol = 'https://';
} else {
    $protocol = 'http://';
}

$endpoint = $_GET['path'];


header("Location: ". $protocol.$ip.$endpoint);

}
function APIcall($url, $method, $token) {

$curl = curl_init($url);

curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);

$headers = [
    'Content-Length: 0',
];

if($token != null)
{
    array_push($headers,'Authorization: Bearer '.$token);
}

curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);


curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);


curl_setopt($curl, CURLOPT_TIMEOUT, 5); //5 seconds

$output = curl_exec($curl);

if (curl_errno($curl)) {
    $output = curl_error($curl);
}


curl_close($curl);

return $output;
}

?>