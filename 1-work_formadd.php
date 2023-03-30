<html>
    <head>
        <title>ADD Document</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
<body>
    

    <div class="container mt-3">
    <div class="card bg-active text-dark">
        <div class="container mt-3">
        <h2>เพิ่มเอกสารถึงผู้บริหาร</h2>
        <p>คณะวิทยาศาสตร์ มหาวิทยาลัยราชภัฏอุดรธานี</p><br>
        <form action="1-work_add.php" method="post" enctype="multipart/form-data">
            <div class="mb-3 mt-3">
                <label>เลขที่เอกสาร : </label>
                <input type="text" class="form-control" size="50" placeholder="เลขเอกสาร" name="id1">
            </div>

            <div class="row">
            <div class="mb-3 mt-3 col">
                <label>ชื่อผู้ส่ง :</label>
                <select class="form-select" name="name1">
                    <option value = "">-- เลือก -- </option>
                    <option value = "นายไชยวัฒน์  หอมแสง">1.นายไชยวัฒน์  หอมแสง </option>
                    <option value = "นางสาวชญาภา  กำมะหยี่">2.นางสาวชญาภา  กำมะหยี่</option>
                    <option value = "นางสาวชยานันท์  อามาตย์ทัศน์">3.นางสาวชยานันท์  อามาตย์ทัศน์</option>
                    <option value = "นายธนพล  บุษบา">4.นายธนพล  บุษบา</option>
                    <option value = "นางสาวธนาภรณ์  ศรีบุรินทร์">5.นางสาวธนาภรณ์  ศรีบุรินทร์</option>
                    <option value = "นางสาวศิรประภา  ภูสงัด">6.นางสาวศิรประภา  ภูสงัด</option>
                    <option value = "นางสาวปาหนัน  เวชสาน">7.นางสาวปาหนัน  เวชสาน</option>
                    <option value = "นางสาวรัตนพร  ธระเสนา">8.นางสาวรัตนพร  ธระเสนา</option>
                    <option value = "นายวิไลย์  ประทุมเขต">9.นายวิไลย์  ประทุมเขต</option>
                    <option value = "นางสาวศรีแพร  วิเศษศรี">10.นางสาวศรีแพร  วิเศษศรี</option>
                    <option value = "นางสาวศศิธร  กิตติราช">11.นางสาวศศิธร  กิตติราช</option>
                    <option value = "นางสาวอารดา  สปาร์ดิ่ง">12.นางสาวอารดา  สปาร์ดิ่ง</option>
                    <option value = "นางทัศมาลี  โรสซอร์">13.นางทัศมาลี  โรสซอร์</option>
                    <option value = "นางสาวเบณจมาศ  ภาโนมัย">14.นางสาวเบณจมาศ  ภาโนมัย</option>
                    <option value = "นางสาวดาวใจ  มาตะรักษ์">15.นางสาวดาวใจ  มาตะรักษ์</option>
                </select>
            </div>
            <div class="mb-3 mt-3 col">
                <label>ชื่อผู้รับ :</label>
                <select class="form-select" name="to1">
                    <option value = "">-- เลือก -- </option>
                    <option value = "ดร.อภิรักษ์  ลอยแก้ว(คณบดี)">ดร.อภิรักษ์  ลอยแก้ว(คณบดี) </option>
                    <option value = "ดร.จิรเดช  อย่าเสียสัตย์(รองคณบดี)">ดร.จิรเดช  อย่าเสียสัตย์(รองคณบดี)</option>
                    <option value = "ดร.วิวรรธน์  แก่นสา(รองคณบดี)">ดร.วิวรรธน์  แก่นสา(รองคณบดี)</option>
                    <option value = "รศ.ดร.กริช  สมกันธา(รองคณบดี)">รศ.ดร.กริช  สมกันธา(รองคณบดี)</option>
                </select>
            </div>
            </div>


            <div class="mb-3 mt-3">
                <label>รายละเอียด :</label>
                <input type="text" class="form-control" size="200" placeholder="รายละเอียดเอกสาร" name="detail1">
            </div>

            <div class="row">
            <div class="mb-3 mt-3 col">
                <label>ไฟล์ :</label>
                <input type="file" class="form-control" name="file1" accept="application/pdf">
            </div>
            <div class="mb-3 mt-3 col">
                <label>สถานะเอกสาร :</label>
                <select class="form-select" name="status1">
                    <option value = "">-- เลือก -- </option>
                    <option value="ลงนามแล้ว">ลงนามแล้ว</option>
                    <option value="ยังไม่ลงนาม">ยังไม่ลงนาม </option>
                    <option value="รอดำเนินการ">รอดำเนินการ </option>
                </select>
            </div> 
            </div>

            <div class="mb-3 mt-3">
                <label>หมายเหตุ :</label>
                <input type="text" class="form-control" size="200" placeholder="อื่นๆ" name="x" readonly>
            </div>  
            

        </div></div><br>   
            <a href="1-work.php" class="btn btn-success">ย้อนกลับ</a>
            <input type="reset" class="btn btn-danger" value="ล้างข้อมูล" >
            <input type="submit" name="submit" class="btn btn-primary" value="บันทึก" >
            
            <br><br><br>
        </form>

    </div>
    </body>
</html>
