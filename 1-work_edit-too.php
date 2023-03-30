<?php
    require_once("connect.php");

    $id1 =$_GET["id1"];

    $query="SELECT * FROM work1 WHERE id1 ='$id1' ";
    $result=mysqli_query($link,$query);
    $data=mysqli_fetch_row($result);
?>
<head>
    <title>Edit Document</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>



    <br><br>
    <div class="container mt-3">
    <div class="card bg-active text-dark">
    <div class="container mt-3">

  
    
        <h2>แก้ไขเอกสาร</h2>
    <form action="1-work_save.php" method="post" enctype="multipart/form-data">
        <input type="hidden" value="<?php echo $id1;?>" class="form-control" name="id1" >   
        
        <div class="mb-3 mt-3">
            <label>เลขที่เอกสาร :</label> 
            <input class="form-control" type="text" value="<?php echo "$id1"; ?>" aria-label="Disabled input example" readonly >
        </div>

        <div class="row">
            <div class="mb-3 mt-3 col">
            <label>ชื่อผู้ส่ง :</label> 
            <input type="text"  class="form-control" size="50" name="name1" value="<?php echo $data[1]; ?>"  readonly>
        </div>
        <div class="mb-3 mt-3 col">                
            <label>ชื่อผู้รับ :</label> 
            <input type="text"  class="form-control" size="50" name="to1" value="<?php echo $data[2]; ?>"  readonly>
        </div>
        </div>

        <div class="mb-3 mt-3">
            <label>รายละเอียด :</label>
            <input type="text" class="form-control" size="200" name="detail1" value="<?php echo $data[3]; ?>" readonly>
        </div>
        
        <div class="row">
        <div class="mb-3 mt-3 col">
            <label>ไฟล์ :</label>
            <input type="file" class="form-control" name="file1" value="<?php echo $data[4]; ?>">
        </div>
        <div class="mb-3 mt-3 col">
            <label>สถานะ :</label>
            <select class="form-select" name="status1">
                <!-- <option value="<?php echo $data[5]; ?>"><?php echo $data[5]; ?></option> -->
                <option value="ลงนามแล้ว" selected>ลงนามแล้ว</option>
                <option value="ยังไม่ลงนาม">ยังไม่ลงนาม </option>
                <option value="รอดำเนินการ">รอดำเนินการ </option>
            </select>
        </div>
        </div>
        
        <div class="mb-3 mt-3">
            <label>หมายเหตุ :</label>
            <input type="text" class="form-control" size="200" name="x" value="<?php echo $data[6]; ?>">
        </div>

        <a href="1-work-too.php" class="btn btn-primary">ย้อนกลับ</a>  
        <input type="reset" class="btn btn-danger" value="พิมพ์ใหม่" >
        <input type="submit" class="btn btn-success" value="ส่งเอกสารกลับ" > 

    </div>
    </form>
    
    </div><br><br>
</body>
<!-- ------------------------------------------------------------------------------------------ -->
        
