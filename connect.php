<?php
    $host="localhost";
    $user="root";
    $password="190944";
    $database="sci";

    $link=mysqli_connect($host,$user,$password,$database);
    if(!$link){
        echo "ไม่สามารถเชื่อมต่อระบบได้";
    exit();
    }
    session_start();
?>