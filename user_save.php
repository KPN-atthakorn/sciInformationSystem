<?php
    require_once("connect.php");

    $userID=$_POST["userID"];
    $name=$_POST["name"];
    $position=$_POST["position"];
    $username=$_POST["username"];
    $password=$_POST["password"];
    

    $query="UPDATE user SET name='$name' , position='$position' , username='$username' , password='$password' WHERE userID = '$userID' ";
    $result=mysqli_query($link,$query);
    if(!$result)
    {
        echo "ไม่สามารถแก้ไขข้อมูลได้"; 
         header('refresh:0; url= user_edit.php');
        //echo $query; exit;
        
    }
    else
    {
        
        echo "<script> alert('แก้ไขข้อมูลสำเร็จ!!!');</script>";
        header('refresh:0; url= user.php');//เรียกไฟล user.php ให้ทำงาน
        
    }
?>



else
    {
        echo "<script> alert('แก้ไขข้อมูลสำเร็จ');</script>";
        header('refresh:0; url= 1-work-too.php');//เรียกไฟล work.php ให้ทำงาน
        
    }