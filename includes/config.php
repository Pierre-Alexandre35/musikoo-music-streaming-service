<?php 
    ob_start();
    session_start();
    

    $timezone = date_default_timezone_set("Europe/London");

    $conn = mysqli_connect("localhost", "root", "Bonjour2021!", "musikoo");

    if(mysqli_connect_errno()){
        echo "failed to connect: " . mysqli_connect_errno();
    }
?>