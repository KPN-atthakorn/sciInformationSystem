<?php
    require_once("connect.php");

    $id1 = $_POST['id1'];
    $name1 = $_POST['name1'];
    $to1 = $_POST["to1"];
    $detail1 = $_POST["detail1"];
    $status1 = $_POST["status1"];
    $x = $_POST["x"];

    if($_FILES["file1"]["name"] != ""){
        $file_name = $_FILES["file1"]["name"];
        $file_tmp = $_FILES["file1"]['tmp_name'];
        $typeImage = strtolower(pathinfo($_FILES["file1"]['name'], PATHINFO_EXTENSION)); // นามสกุลของรูปที่ส่งมา
        $valid_extensions = array("pdf", "docx", "jpg" , "PNG" , "png" , "JPG"); // นามสกุลที่อนุญาติส่งได้
        $image = "ส่งกลับ-".$id1.".".$typeImage; // เอาไว้ตั้งเป็นชื่อไฟล์รูปเก็บลงฐานข้อมูล
        if(!(in_array(strtolower($typeImage), $valid_extensions))){
            echo "<script> alert('นามสกุลไฟล์ไม่ถูก');</script>";
            header('refresh:0; url= 1-work_edit.php'); 
        }
    }
    
    $query_old = mysqli_query($link,"SELECT file1 FROM work1 WHERE id1 = '$id1' ");
    $result_old = mysqli_fetch_assoc($query_old);

    $query="UPDATE work1 SET name1 = '$name1' , to1 = '$to1' , detail1 = '$detail1'  , file2 = '$image' , status1 = '$status1' , x = '$x' WHERE id1 = '$id1'";
    // echo $query; exit;
    $result=mysqli_query($link,$query);
    if(!$result)
    {
        echo "<script> alert('ไม่สามารถแก้ไขข้อมูลได้');</script>";
        header ('refresh:0; url= 1-work_formadd.php');
    }
    else
    {
        if($_FILES["file1"]["name"] != ""){        
            $folder = "filess/";
            $return_file_folder = "return_filess/";
            // unlink($folder.$result_old["file1"]);
            $upload = copy($file_tmp, $return_file_folder.$image);
        }
        // ------------------------เริ่มส่วนแจ้งเตือน---------------------------
                        $sToken = "4mVdCe9PRPIgkGvbhFvGQNtTpqRleY3u82GVzlO9XC5";
                        //$sToken = "lJ7FOeOLFwPBDUv4zcv6J2rtoZ431dZJcLKa1hYxaEB";
                        $sMessage = "แจ้งเตือนการส่งกลับเอกสาร\r\n";
                        $sMessage .= "จาก : " . $to1 . " \r\n";
                        $sMessage .= "ถึง : " . $name1 . " \r\n";
                        $sMessage .= "สถานะ : " . $status1 . " \r\n";
                        $sMessage .= "ตรวจสอบได้ที่ ระบบรับ-ส่งหนังสือราชการภายในสำนักงาน\r\n";

                        
                        $chOne = curl_init(); 
                        curl_setopt( $chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify"); 
                        curl_setopt( $chOne, CURLOPT_SSL_VERIFYHOST, 0); 
                        curl_setopt( $chOne, CURLOPT_SSL_VERIFYPEER, 0); 
                        curl_setopt( $chOne, CURLOPT_POST, 1); 
                        curl_setopt( $chOne, CURLOPT_POSTFIELDS, "message=".$sMessage); 
                        $headers = array( 'Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer '.$sToken.'', );
                        curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers); 
                        curl_setopt( $chOne, CURLOPT_RETURNTRANSFER, 1); 
                        $result = curl_exec( $chOne ); 
    
                        //Result error 
                        // if(curl_error($chOne)) 
                        // { 
                        //     echo 'error:' . curl_error($chOne); 
                        // } 
                        // else { 
                        //     $result_ = json_decode($result, true); 
                        //     echo "status : ".$result_['status']; echo "message : ". $result_['message'];
                        // } 
                        // curl_close( $chOne );                            
                    
                        // ------------------------จบส่วนแจ้งเตือน----------------------------
            
            header('refresh:0; url= 1-work-too.php');//เรียกไฟล work.php ให้ทำงาน
            echo "<script> alert('แก้ไขข้อมูลสำเร็จ');</script>";
    }
?>