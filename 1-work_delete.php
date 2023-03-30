<?php
    require_once("connect.php");

    $id1 =$_GET["id1"];

    $query = "SELECT file1 , file2 FROM work1 WHERE id1 ='$id1' ";
    $result=mysqli_query($link,$query);
    $data=mysqli_fetch_assoc($result);

    $query="DELETE FROM work1 WHERE id1 ='$id1' ";
    $result=mysqli_query($link,$query);
    if(!$result)
    {
        echo "<script> alert('ไม่สามารถลบข้อมูลได้');</script>";
        header('refresh:0; url= 1-work.php');//เรียกไฟล์ work.php ให้ทำงาน
    }
    else
    {
        unlink("filess/".$data['file1']);
        unlink("return_filess/".$data['file2']);

        echo "<script> alert('ลบข้อมูลสำเร็จ');</script>";
        header('refresh:0; url= 1-work.php');//เรียกไฟล์ work.php ให้ทำงาน
        
    }
?>