<?php
    require_once("connect.php");

    if(isset($_POST['submit'])){
        $id1 = $_POST['id1'];
        $name1 = $_POST['name1'];
        $to1 = $_POST["to1"];
        $detail1 = $_POST["detail1"];
        $status1 = $_POST["status1"];
        $x = $_POST["x"];

        $file_name = $_FILES["file1"]["name"];
        $file_tmp = $_FILES["file1"]['tmp_name'];
        $typeImage = strtolower(pathinfo($_FILES["file1"]['name'], PATHINFO_EXTENSION)); // นามสกุลของรูปที่ส่งมา
        $valid_extensions = array("pdf", "docx", "jpg"); // นามสกุลที่อนุญาติส่งได้
        $image = "เพิ่มแล้ว-".$id1.".".$typeImage; // เอาไว้ตั้งเป็นชื่อไฟล์รูปเก็บลงฐานข้อมูล


        if($id1 =="") //ตรวจสอบช่องข้อมูลว่าเป็นค่าว่างหรือไม่
        {
            echo "<script> alert('กรุณากรอกเลขที่หนังสือ');</script>";
            header('refresh:0; url= 1-work_formadd.php'); 
        }
        else            {
            $mysqlcheck="SELECT * FROM work1 WHERE id1 ='$id1' "; //ตรวจสอบ
            $querycheck=mysqli_query($link,$mysqlcheck); //เช็ครหัสสินค้า
            $r=mysqli_num_rows($querycheck); //ซ้ำกับข้อมูลในฐานข้อมูลหรือไม่
            if($r>=1) //ถ้ามีมากกว่า 1 แสดงว่าซ้ำ
            {
                echo "<script> alert('เลขที่หนังสือ $id1 นี้มีอยู่แล้ว');</script>";
                header('refresh:0; url= 1-work_formadd.php'); 
                    
            }else if(!(in_array(strtolower($typeImage), $valid_extensions))){
                echo "<script> alert('นามสกุลไฟล์ไม่ถูก');</script>";
                   header('refresh:0; url= 1-work_formadd.php'); 
                // echo $query;
                // exit;
            }
            else
            {
                $query="INSERT INTO work1(id1,name1,to1,detail1,file1,status1,x) 
                        Values('$id1','$name1','$to1','$detail1','$image','$status1','$x')";
                $result=mysqli_query($link,$query);
                if(!$result)
                    {
                        //echo $query;
                        echo "<script> alert('ไม่สามารถบันทึกข้อมูลได้');</script>";
                        header('refresh:0; url= 1-work_formadd.php'); 
                    }
                    else 
                    {
                        $folder = "filess/";
                        $upload = copy($file_tmp, $folder.$image);

                        // ------------------------เริ่มส่วนแจ้งเตือน---------------------------
                        $sToken = "4mVdCe9PRPIgkGvbhFvGQNtTpqRleY3u82GVzlO9XC5";
                        $sMessage = "แจ้งเตือนการเพิ่มเอกสารใหม่\r\n";
                        $sMessage .= "จาก : " . $name1 . " \r\n";
                        $sMessage .= "ถึง : " . $to1 . " \r\n";
                        $sMessage .= "รายละเอียด : " . $detail1 . " \r\n";
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

                        echo "<script> alert('บันทึกข้อมูลสำเร็จ');</script>";
                        header("refresh:0; url= 1-work.php"); //เรียกไฟล์ work.php ให้ทำงาน    
                    }
                }
            }
    }else {
        echo "<script> alert('มีบางอย่างผิดพลาด!!!');</script>";
        header("refresh:0; url= 1-work.php"); //เรียกไฟล์ work.php ให้ทำงาน    
    }
        

?>