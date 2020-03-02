<?php 
$time = date("his");
$name = htmlspecialchars($_POST["name"]);
$dir = "$name$time.txt";
file_put_contents(dirname(__FILE__).'/files/'."$name$time.txt",  "YOUR DATA\n", FILE_APPEND);
echo "$name$time";
?>