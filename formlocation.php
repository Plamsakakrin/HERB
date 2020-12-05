<!doctype php>
<php lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!--==============Bootstap=================-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <!--======================Bootstap=============-->
 
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

<!--===========Navbar=========================-->
</br></br></br></br>

<!--======H2======================-->
<div class="feature-section">
  <div class="container">
    <div class="text-center" mb-5>
      <h2>เพิ่มบริเวณที่พบ</h2>
    </div></br>
  </div>
<!--=========H2==================-->


<!--==============Formlocation====================-->

 <div class="container">
  <form action="insertlocation.php" method="post">
      <div class="form-group">
    <div class="col-12">
    <label for="AreaID">รหัสพื้นที่</label>
    <input type="text" class="form-control" name="AreaID" placeholder="62206-15130-88-001/1">
  </div>

<br>
  <div class="form-group">
    <div class="col-12">
    <label for="ZoneID">รหัสโซน</label>
    <input type="text" class="form-control"name="ZoneID" placeholder="">
  </div>

<br>
  <div class="form-group">
    <div class="col-12">
    <label for="HerbID">รหัสพืชสมุนไพร</label>
    <input type="text" class="form-control" name="HerbID" placeholder="62206-15130-88-001/1">
  </div>

<br>
<div class="form-group">
  <div class="col-12">
    <label for="Statusdate">วันที่สถานะ</label>
    <input type="text" class="form-control" name="Statusdate" placeholder="15/01/2019">
  </div>

<br>
<div class="form-group">
  <div class="col-12">
    <label for="Status">สถานะ</label>
    <input type="text" class="form-control" name="Status" placeholder="1.เสียชีวิต 2.มีชีวิต (ใส่แค่ตัวเลข )">
  </div>

<br>
 <div class="form-group">
     <div class="col-12">
    <label for="Longitude">ลองจิจูด</label>
    <input type="text" class="form-control"name="Longitude" placeholder="101.xxxxxx">
  </div>
<br>
<div class="form-group">
   <div class="col-12">
    <label for="Latitude">ละติจูด</label>
    <input type="text" class="form-control" name="Latitude" placeholder="15.xxxxxx">
</div>

<!--===========Formlocation==========================================-->

<br>
<!--==============Btn=============================-->

&nbsp;&nbsp; <input class="btn btn-outline-primary" type="submit" value="Submit">
<input class="btn btn-outline-primary" type="reset" value="Reset">
</form>
  </div>
<!--==================Btn====================-->

<!--===============Scrip Js================-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
<!--=============Scrip Js================-->

  </body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</php>


