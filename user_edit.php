<?php
    require_once("connect.php");

    $userID=$_GET["userID"];

    $query="SELECT * FROM user WHERE userID='$userID' ";
    $result=mysqli_query($link,$query);
    $data=mysqli_fetch_row($result);
?>
<head>
    <title>การแก้ไขข้อมูลผู้ใช้</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>

    <div class="container mt-3">
        <h2>แก้ไขข้อมูลผู้ใช้</h2>
    <form action="user_save.php" method="post">
        <input type="hidden" value="<?php echo $userID;?>" class="form-control" name="userID" >   
        
        <div class="mb-3 mt-3">
            <label>รหัสผู้ใช้ :</label> 
            <input type="text" class="form-control" value="<?php echo "$userID"; ?>" aria-label="Disabled input example" readonly>   
        </div>
        <div class="mb-3 mt-3">                
            <label>ชื่อ-สกุล :</label> 
            <input type="text"  size="50" name="name" value="<?php echo $data[1]; ?>" class="form-control">
        </div>
        <div class="mb-3 mt-3">
                <label>ตำแหน่งงาน :</label>
                <select class="form-select" name="position" value="<?php echo $data[2];?>">
                    <option value=""><?php echo $data[2];?></option>
                    <option value="Scb1001">ผู้บริหาร</option>
                    <option value="Scb2001">เจ้าหน้าที่</option>
                </select>
            </div>
        <div class="mb-3 mt-3">
            <label>ชื่อผู้ใช้ :</label>
            <input type="text" class="form-control" size="200" name="username" value="<?php echo $data[3]; ?>">
        </div>
        <div class="mb-3 mt-3">
            <label>รหัสผ่าน :</label>
            <input type="password" class="form-control" size="200" name="password" value="<?php echo $data[4]; ?>">
        </div>
        <a href="user.php" class="btn btn-Secondary">ย้อนกลับ</a>
        <input type="reset" class="btn btn-warning" value="ล้างข้อมูล" >
        <input type="submit" class="btn btn-primary" value="ตกลง" >

      
    </div>
<!-- ------------------------------------------------------------------------------------------ -->
        
