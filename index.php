<?php
    require_once("connect.php");
    if(isset($_SESSION['Scb1001_name']) || isset($_SESSION['Scb2001_name'])){}
    else{
        header("location:login1.php");
    }
?>
<html>
    <head>
        <title>ผู้บริหาร</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <style>
    .bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  font-size: 50px;
  border: 10px solid #f1f1f1;
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 100%;
  height: 100%;
  /* text-align: center; */
}
    .float-end {
  position: relative;
  text-align: center;
  color: white;
}
.bottom-right {
  position: absolute;
  bottom: 8px;
  right: 16px;
}
.bottom-left {
  position: absolute;
  bottom: 8px;
  left: 16px;
}
        .centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
</style>
    </head>
    <body>
<div class="float-end">
  <img src="มอ.jpg"  style="border:0;" width="100%" height="35%">
  <!-- <div class="bg-text">TEXT</div> -->
  <div class="centered bg-text" style="font-size:50px">ระบบรับ-ส่งหนังสือราชการภายในสำนักงาน </div>
  <div class="bottom-left"style="font-size:30px;">ยินดีต้อนรับ <?php echo $_SESSION['Scb1001_name'];?></div>
  <div class="bottom-right " style="font-size:30px">คณะวิทยาศาสตร์ มหาวิทยาลัยราชภัฏอุดรธานี</div>
</div>

<nav class="navbar navbar-expand-sm bg-danger navbar-dark">
    <div class="container-fluid">
        <!-- <div class="navbar-header">
        <a class="navbar-brand" href="#">ระบบรับ-ส่ง เกษียณหนังสือ</a>
        </div> -->
        <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">หน้าหลัก</a></li>
        <li><a href="1-work-too.php">รับเอกสารจากเจ้าหน้าที่</a></li>
        <li><a href="1-work-to.php">ส่งเอกสารออก</a></li>
        <li><a href="คู่มือการใช้งาน.pdf" target='_blank'>คู่มือการใช้งานระบบ</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php">ออกจากระบบ</a></li>
        </ul>
    </div>
    </nav>

    <div class="w3-main container">
        <!-- <header class="w3-container w3-theme" style="padding:64px 32px"> -->
            <h1 class="w3-xxxlarge">เอกสารเข้าทั้งหมด</h1>
            <p>คณะวิทยาศาสตร์ มหาวิทยาลัยราชภัฏอุดรธานี</p>


        <div class="container mt-3">
        <table class="table table-hover "  align = "center">
        <thead>
            <tr align = "center">
                <th>รหัสเอกสาร</th>
                <th>ชื่อผู้ส่ง</th>
                <th>ชื่อผู้รับ</th>
                <th>รายละเอียด</th>
                <th>ไฟล์เอกสาร</th>
                <th>สถานะเอกสาร</th>
            </tr>
        </thead>
        <tbody>

        <form  method="get" id="form" enctype="multipart/form-data" action="">
            <!-- <strong>ค้นหาข้อมูลข่าว</strong>
            <input type="text" name="search" size="30" value="">
            <input type="submit" value="ค้นหาข้อมูล"> -->

            <div class="mb-3 mt-3">
                <label>ค้นหาเอกสาร :</label>
                <input type="text" class="form-control" size="50" name="search" value="" placeholder="กรอกข้อมูลที่ต้องการค้นหา">
                <br><input type="submit" class="btn btn-primary" value="ค้นหาข้อมูล">
            </div><br>
                 
        </form>

        <?php
            $search=isset($_GET['search']) ? $_GET['search']:'';
            $query="SELECT * from work1 where name1 LIKE '%$search%' ";
            
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
                    echo $data[2]; //แสดงข้อมูลในคอลัมน์ที่ 2 แสดงรายละเอียด
                    echo "</td>";

                    echo "<td>";
                    echo $data[3]; //แสดงข้อมูลในคอลัมน์ที่ 3 แสดงไฟล์
                    
                    echo "</td>";
    
                    echo "<td>";
                    echo $data[4]; //แสดงข้อมูลในคอลัมน์ที่ 4 แสดงสถานะ
                    echo "</td>";

                    echo "<td>";
                    echo $data[5]; //แสดงข้อมูลในคอลัมน์ที่ 4 แสดงสถานะ
                    echo "</td>";
                 
                    echo "</tr>";
                }
                 ?>             
        
                
        </tbody>
        </table>
        </div>
    
    </body>
</html>
