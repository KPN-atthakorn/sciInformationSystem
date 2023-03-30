<?php 
    require_once("connect.php");
    


    $username=$_POST['username'];
    $password=$_POST['password'];

    if(isset($_POST['btn_login']) && $username && $password){
        $sqlcheck="SELECT * FROM user WHERE username = '$username' AND password = '$password' ";
        $querysql=mysqli_query($link,$sqlcheck);
        

        if(mysqli_num_rows($querysql) == 1){
            $row = mysqli_fetch_array($querysql);
            $name = $row['name'];
            $status = $row['position'];
            //echo $query ;
            switch($status){
                case "Scb1001":
                    $_SESSION['Scb1001_name'] = $name;
                    Header('Location: index.php'); //ผู้บริหาร
                    break;
                case "Scb2001":
                    $_SESSION['Scb2001_name'] = $name;
                    Header('Location: index1.php');  //เจ้าหน้าที่
                    break;
                default :
                    echo "<script> alert('สถานะของคุณถูกแก้ไขหรือคุณไม่มีสิทธิ์เข้าใช้งาน');</script>";
                    header('refresh:0; url=login.php');
                    break;
            }

        }
    }else{

        echo "<script> alert('ชื่อผู้ใช้งานหรือรหัสผ่านไม่ถูกต้อง');</script>";
        header('refresh:0; url=login.php');

    } 