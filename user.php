<?php
    require_once("connect.php");
?>

<html>
    <head>
        <title>ข้อมูลผู้ใช้</title>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
            function chkdel(){
                if(confirm('กรุณายืนยันการลบอีกครั้ง!!!')){
                    return true;
                }else{
                    return false;
                }
            }
        </script>
    </head>
    <body>
        
        <div class="w3-main">
        <header class="w3-container w3-theme" style="padding:64px 32px">
            <h1 class="w3-xxxlarge">ข้อมูลผู้ใช้</h1>
            <p>คณะวิทยาศาสตร์ มหาวิทยาลัยราชภัฏอุดรธานี</p>


            <div class="container mt-3">
        <table class="table table-striped table-info" align = "center">
        <thead>
            <tr>
                <th>รหัสผู้ใช้</th>
                <th>ชื่อ-สกุล</th>
                <th>ตำแหน่งงาน</th>
                <th>ชื่อผู้ใช้</th>
                <th>รหัสผ่าน</th>
                <th>แก้ไข</th>
                <th>ลบ</th>
            </tr>
        </thead>
        <tbody>

        <form  method="get" id="form" enctype="multipart/form-data" action="">
            <!-- <strong>ค้นหาข้อมูลข่าว</strong>
            <input type="text" name="search" size="30" value="">
            <input type="submit" value="ค้นหาข้อมูล"> -->

            <div class="mb-3 mt-3">
                <label>ค้นหาข้อมูลผู้ใช้ :</label>
                <input type="text" class="form-control" size="50" name="search" value="" placeholder="กรอกข้อมูลที่ต้องการค้นหา">
                <br><input type="submit" class="btn btn-primary" value="ค้นหาข้อมูล">
            </div>
                 
        </form>

        <?php
            $search=isset($_GET['search']) ? $_GET['search']:'';
            $query="SELECT * from user where name LIKE '%$search%' ";
            
            //$query="SELECT * FROM user";
            $result=mysqli_query($link,$query);
            while($data=mysqli_fetch_row($result)) //ถ่ายโอนข้อมูลลงอาย์เรย์
                {
                    echo "<td>";
                    echo $data[0]; //แสดงข้อมูลในคอลัมน์ที่ 0 แสดงรหัสผู้ใช้
                    echo "</td>";

                    echo "<td>";
                    echo $data[1]; //แสดงข้อมูลในคอลัมน์ที่ 1 แสดงชื่อ-สกุล
                    echo "</td>";

                    echo "<td>";
                    echo $data[2]; //แสดงข้อมูลในคอลัมน์ที่ 2 แสดงตำแหน่ง
                    echo "</td>";

                    echo "<td>";
                    echo $data[3]; //แสดงข้อมูลในคอลัมน์ที่ 3 แสดงชื่อผู้ใช้
                    echo "</td>";
    
                    echo "<td>";
                    echo $data[4]; //แสดงข้อมูลในคอลัมน์ที่ 4 แสดงรหัสผ่าน
                    echo "</td>";

                    echo "<td><a class='btn btn-primary btn-warning' href='user_edit.php?userID=$data[0]' >แก้ไข</td>"; //ลิงค์สำหรับการแก้ไขข้อมูล
                    echo "<td><a class='btn btn-primary btn-danger' href='user_delete.php?userID=$data[0]' OnClick='retrun chkdel();'>ลบ</td>";//ลิงค์สำหรับลบข้อมูล
                 
                    echo "</tr>";
                }
                 ?>             
        
                
        </tbody>
        </table>
        </div>
        <br><br>
        <a href="index1.php" class="btn btn-primary">ย้อนกลับ</a>
        <a href="user_formadd.php" class="btn btn-success">เพิ่มข้อมูล</a>
        <br><br><br><br><br><br><br><br>


        </div>

    </header>
</html>  
