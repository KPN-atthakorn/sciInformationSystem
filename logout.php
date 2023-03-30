<?php 
 
    require_once("connect.php");
    //session_start();
    session_destroy();

    echo "<script>alert('คุณได้ทำการออกจากระบบเรียบร้อยแล้ว');</script>";
    // header('refresh:0; url=login1.php');
    header("location:login1.php");


?>