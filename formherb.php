<!doctype php>
<php lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!--========Bootstap===================-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   
  <!--=========Bootstap======================-->
 
  <body>
   <!--=============Navbar============================-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top "style="background-color:#9370db;">
  <a class="navbar-brand" href="admin.php">

     <!-- Image and text -->
    <img src="asset/images/pnru_logo.png" width="50" height="55" alt="" loading="lazy">
    <img src="asset/images/logo.png" width="50" height="55" alt="" loading="lazy"></a>
 <!-- Image and text -->

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<div class="container">
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav ml-auto">

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" style="color: white;" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Admin
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="indexadmin.php">หน้าต่าง Admin</a>
          <div class="dropdown-divider"></div>
           <a class="dropdown-item" href="formherb.php">เพิ่มข้อมูลสมุนไพร</a>
            <a class="dropdown-item" href="formlocation.php">เพิ่มข้อมูลพิกัด</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="showtableherbadmin.php">ดูตารางพืชสมุนไพร</a>
          <a class="dropdown-item" href="showtablelocation.php">ดูตารางพิกัด</a>
          <a class="dropdown-item" href="reportherbadmin.php">แก้ไข/ลบพืชสมุนไพร</a>
           <a class="dropdown-item" href="reportlocationadmin.php">แก้ไข/ลบพิกัด</a>
        </div>
      </li>
      <a class="nav-link" style="color: white;" href="logout.php">Sign Out</a>
      </li>
    </div>
  </div>
</div>
</nav>
<!--===========Navbar=========================-->

</br></br></br></br>

<!--=======H2 and formherb================-->
<div class="feature-section">
  <div class="container">
    <div class="text-center" mb-5>
      <h2>เพิ่มข้อมูลพืชสมุนไพร</h2>
    </div></br>
  </div>
  
<div class="container">
    <form action="insertherb.php" method="post" >
        <div class="form-group">
    <label for="HerbID">รหัสพืชสมุนไพร</label>
    <input type="text" class="form-control" name="HerbID" placeholder="62206-15130-88-001">
  </div>

<!-- HerbID-->

<div class="form-group">
    <label for="HerbName">ชื่อสมุนไพร</label>
    <input type="text" class="form-control" name="HerbName" placeholder="กระถิน สีฟัน ก้างปลาแดง">
  </div>


<div class="form-group">
    <label for="Herbscience">ชื่อวิทยาศาสตร์สมุนไพร</label>
    <input type="text" class="form-control" name="Herbscience" placeholder="Leucaena leucocepha">
</div>


   <div class="form-group">
    <label for="Snuff">รสชาติ</label>
    <input type="text" class="form-control" name="Snuff" placeholder="รสชาติ เช่น รสฝาดมัน รสขม รสหวาน">
  </div>
  
  

<div class="form-group">
    <label for="Wood">มีเนื้อไม้ไหม</label>
    <input type="text" class="form-control" name="Wood" placeholder="มีหรือไม่มี">
  </div>
  


<div class="form-group">
    <label for="Dopey">มีอาการเมาไหม</label>
    <input type="text" class="form-control" name="Dopey" placeholder="เมาหรือไม่เมา">
  </div>
  
 
<div class="form-group">
    <label for="Bough">กิ่งก้านมีขนไหม</label>
    <input type="text" class="form-control" name="Bough" placeholder="กิ่งก้านมีขนหรือไม่มีขน">
  </div>
  

 

<div class="form-group">
    <label for="Fruit">พืชสมุนไพรมีผลไหม</label>
    <input type="text" class="form-control" name="Fruit" placeholder="มีผลหรือไม่มีผล">
  </div>
  
 <div class="form-group">
    <label for="Thorn">พืชสมุนไพรมีหนามไหม</label>
    <input type="text" class="form-control" name="Thorn" placeholder="มีหนามหรือไม่มีหนาม">
  </div>
  

  
<div class="form-group">
    <label for="Smell">พืชสมุนไพรมีกลิ่นไหม</label>
    <input type="text" class="form-control" name="Smell" placeholder="มีกลิ่นหอมหรือไม่มีกลิ่นหอม">
  </div>
 



 
<div class="form-group">
    <label for="Sap">มียางไหม</label>
    <input type="text" class="form-control" name="Sap" placeholder="มียางหรือไม่มี">
  </div>
 

  
  
<div class="form-group">
    <label for="Itching">มีอาการคันไหม</label>
    <input type="text" class="form-control" name="Itching" placeholder="คันหรือไม่คัน">
  </div>
 


<div class="form-group">
    <label for="Tubercrop">หัวพืชสมุนไพรอยู่ในดินไหม</label>
    <input type="text" class="form-control" name="Tubercrop" placeholder="หัวอยู่ในดินหรือไม่ได้อยู่ในดิน">
  </div>
 
  <div class="form-group">
    <label for="HerbType">ประเภทของพืชสมุนไพร</label>
    <input type="text" class="form-control" name="HerbType" placeholder="เช่น ไม้พุ่ม ไม้เถา วัชพืช">
  </div>


  
  
 <div class="form-group"> 
    <label for="Herbsize">ขนาดของพืชสมุนไพร</label>
    <input type="text" class="form-control" name="Herbsize" placeholder="เช่น ขนาดเล็ก ขนาดกลาง ขนาดใหญ่">
  </div>
  
 
  

 <div class="form-group">
<label for="Properties">คุณสมบัติของพืชสมุนไพร </label>
<textarea class="form-control" name="Properties" rows="4"></textarea>
</div>
  
  
  
  <div class="form-group">
    <label for="SeasonID">รหัสฤดู</label>
    <input type="text" class="form-control" name="SeasonID" placeholder="">
  </div>


<div class="form-group">
    <label for="HerbfamilyID">รหัสวงศ์</label>
    <input type="text" class="form-control" name="HerbfamilyID" placeholder="">
  </div>
<br>

<div class="custom-file">
  <input type="file" class="custom-file-input" id="customFile">
  <label class="custom-file-label" for="customFile">รูปหลัก</label>
</div>

<br><br>
<div class="custom-file">
  <input type="file" class="custom-file-input" id="customFile">
  <label class="custom-file-label" for="customFile">รูป2</label>
</div>
<br><br>
<div class="custom-file">
  <input type="file" class="custom-file-input" id="customFile">
  <label class="custom-file-label" for="customFile">รูป3</label>
</div>
<br><br>
<div class="custom-file">
  <input type="file" class="custom-file-input" id="customFile">
  <label class="custom-file-label" for="customFile">รูป4</label>
</div>
<br><br>
<div class="custom-file">
  <input type="file" class="custom-file-input" id="customFile">
  <label class="custom-file-label" for="customFile">รูป5</label>
</div>
<!--======H2 and formherb==========-->
<br>
<br>

 <!--==============Btn==================--> 
    &nbsp; <input class="btn btn-outline-primary" type="submit" name="save" value="Submit">
<input class="btn btn-outline-primary" type="reset" value="Reset">
</form>
</div>
<!--=======Btn============-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</php>


