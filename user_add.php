<?php
    require_once("connect.php");

    $userID=$_POST["userID"];
    $name=$_POST["name"];
    $position=$_POST["position"];
    $username=$_POST["username"];
    $password=$_POST["password"];
    
    if($userID=="") //ตรวจสอบช่องข้อมูลว่าเป็นค่าว่างหรือไม่
    {
        echo "<td align='center'>";
        echo "กรุณาป้อนข้อมูลรหัสนักศึกษา";
        echo "</td>";
    }
    else
    {
        $mysqlcheck="SELECT * FROM user WHERE userID='$userID' "; //ตรวจสอบ
        $querycheck=mysqli_query($link,$mysqlcheck); //เช็ครหัสผู้ใช้
        $r=mysqli_num_rows($querycheck); //ซ้ำกับข้อมูลในฐานข้อมูลหรือไม่
        if($r>=1) //ถ้ามีมากกว่า 1 แสดงว่าซ้ำ
        {
            echo "รหัสผู้ใช้ $userID มีอยู่แล้ว"; 
            //echo $query;
        } 
        else
        {
            $query="INSERT INTO user(userID , name , position , username , password  )
                    values('$userID','$name','$position','$username','$password' )";
            $result=mysqli_query($link,$query);
            if(!$result)
            {
                echo "<td align='center'>";
                echo "ไม่สามารถบันทึกข้อมูลได้";
               // echo $query;
                echo "</td>";
            }
            else 
            {
                echo "<script> alert('บันทึกข้อมูลสำเร็จ!!!');</script>";
                header('refresh:0; url= user.php'); //เรียกไฟล์ users-user.php ให้ทำงาน  
                 
            }
        }
    }

?>