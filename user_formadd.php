<html>
    <head>
        <title>เพิ่มข้อมูลผู้ใช้</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
    <body>

        <div class="container mt-3">
        <h2>เพิ่มข้อมูลผู้ใช้</h2>
        <h4>คณะวิทยาศาสตร์ มหาวิทยาลัยราชภัฏอุดรธานี</h4>
        <hr>
        <form action="user_add.php" method="post">

        <div class="mb-3 mt-3">
            <label>รหัสผู้ใช้ :</label> 
            <input type="text" class="form-control" size="50" placeholder="กรอกรหัสผู้ใช้/รหัสบุคลากร" name="userID">
        </div>
        <div class="mb-3 mt-3">                
            <label>ชื่อ-สกุล :</label> 
            <input type="text" class="form-control" size="50" placeholder="กรอกชื่อ-สกุล" name="name">
        </div>

        <div class="container mt-3">
                <form action="user_add.php">
                <label>ตำแหน่งงาน :</label>
                <select class="form-select" id="position" name="position">
                    <option value="">---เลือก---</option>
                    <option value="Scb1001">ผู้บริหาร</option>
                    <option value="Scb2001">เจ้าหน้าที่</option>
                </select>
            </div>    

            <div class="mb-3 mt-3">
            <label>ชื่อผู้ใช้ :</label>
            <input type="text" class="form-control" size="50" placeholder="กรอกรชื่อผู้ใช้" name="username">
        </div>
        <div class="mb-3 mt-3">
            <label>รหัสผ่าน :</label>
            <input type="password" class="form-control" size="50" placeholder="กรอกรหัสผ่าน" name="password">
        </div>
            <a href="user.php" class="btn btn-Secondary">ย้อนกลับ</a>
            <input type="reset" class="btn btn-warning" value="ล้างข้อมูล" >
            <input type="submit" class="btn btn-primary" value="ตกลง" >
        </div>
        </form>


    </body>
</html>
