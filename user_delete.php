<?php
    require_once("connect.php");
    $userID=$_GET["userID"];

    $query="DELETE FROM user WHERE userID='$userID' ";
    $result=mysqli_query($link,$query);
    if(!$result)
    {
        echo "ไม่สามารถลบข้อมูลได้";
    }
    else
    {
        echo "<script> alert('ลบข้อมูลสำเร็จ');</script>";
        header('refresh:0; url= user.php');//เรียกไฟล์ users-user.php ให้ทำงาน
        
    }
?>