<!DOCTYPE html>
<html>
    <head>
        <title>LoginApp</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-img {
  /* The image used */
  background-image: url("มอสามพร้าว.jpg");

  min-height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

/* Add styles to the form container */
.container {
  position: absolute;
  right: 0;
  margin: 20px;
  max-width: 300px;
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 50%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 50%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
</head>
<body>

<div class="bg-img ">
<!-- <div class="col-md-6 col-lg-7 d-flex align-items-center"> -->
              <div class="card-body p-4 p-lg-5 text-black align-items-center">

                <form id="login-form" class="form" action="checklogin.php" method="post">
                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h2 fw-bold  mb-0 ">ระบบรับ-ส่งหนังสือราชการภายในสำนักงานคณะวิทยาศาสตร์</span>
                    <!-- <div class="centered bg-text" style="font-size:50px">ระบบรับ-ส่ง เกษียณหนังสือ คณะวิทยาศาสตร์</div> -->
                  </div>

                  <h5 class="fw-white mb-1 pb-3" style="letter-spacing: 1px;">เข้าสู่ระบบ</h5>

                  <div class="form-outline mb-4 ">
                    <label class="text-white" for="username" style="letter-spacing: 1px;">ชื่อผู้ใช้</label>
                    <input type="text" id="username" name="username" class="form-control" required placeholder="ชื่อผู้ใช้หรืออีเมลล์"/>  
                  </div>

                  <div class="form-outline mb-4">
                    <label class="text-white" for="password" style="letter-spacing: 1px;">รหัสผ่าน</label>
                    <input type="password" name="password" id="password" class="form-control" required placeholder="รหัสผ่าน"/> 
                  </div>

                  <div class="pt-1 mb-4 mt-3">
                    <button type="submit" class="btn btn-info btn-lg btn-block" name ="btn_login">เข้าสู่ระบบ</button>
                  </div>
                </form>

              </div>
            </div>


</body>
</html>
