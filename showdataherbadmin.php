<!doctype php>
<php lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
  <body>
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

</br></br></br></br>
<div class="feature-section">
  <div class="container">
    <div class="text-center" mb-5>
      <h2>ข้อมูลพืชสมุนไพร</h2>
    </div></br>
  </div>
  <br><br>

 <div class="container">
    <h1></h1>
    <?php
    //รับ parameter มาเก็บในตัวแปร ID
    $ID=$_GET["ID"];
    //1. เชื่อมต่อ database: 
    include('connection.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
    // สิ่งที่ต้องการคือ 63201-10220-99-xxx เราไม่ต้องการ /001 ข้างหลัง
    // 2.1 substr เพื่อตัดรหัส 63201-10220-99-xxx ออก และเก็บในตัวแปร subID
     $subID = substr($ID,18);
    // ใช้ trim ตัด /001 ที่เก็บในตัวแปร subID เราก็จะได้ 63201-10220-99-xxx เพื่อไป query ในตารางplantdetail
    $trimID = trim($ID,$subID);
    $query = "SELECT * FROM `herb` WHERE `HerbID` = '".$ID."'" or die("Error:" . mysqli_error());
    // SELECT * FROM `herb` WHERE `HerbID` = '62206-15130-88-001' 
    // ตรงนี้ ตอนแรกมึงไปใส่ SQL ตรงๆ ถ้ามึงจะทำแบบเดิมมึงต้องก้อปจากบรรทัด 68 ไป แบบนี้
    // $result = mysqli_query($conn,"SELECT * FROM `herb` WHERE `HerbID` = '".$ID."'");
    $result = mysqli_query($conn,$query);
    // จะแก้โดยการ เอาตัวแปร id แสดงรหัสและตักคำไป query มาจากฐานข้อมูล
    while ($row = mysqli_fetch_array($result)) {

        echo "<div><p>รหัสพืชสมุนไพร : ".$ID."</p></div>";
        echo "<div><p>ชื่อสมุนไพร: ".$row['HerbName']."</p></div>";
        echo "<div><p>ชื่อวิทยาศาสตร์สมุนไพร :".$row['Herbscience']."</p></div>";
        echo "<div><p>รสชาติ : ".$row['Snuff']."</p></div>";
        echo "<div><p>มีเนื้อไม้ไหม : ".$row['Wood']."</p></div>";
        echo "<div><p>มีอาการเมาไหม : ".$row['Dopey']."</p></div>";
        echo "<div><p>กิ่งก้านมีขนไหม : ".$row['Bough']."</p></div>";
        echo "<div><p>พืชสมุนไพรมีผลไหม : ".$row['Fruit']."</p></div>";
        echo "<div><p>พืชสมุนไพรมีหนามไหม : ".$row['Thorn']."</p></div>";
        // echo "<div><p>PlantIcon : ".$row['PlantIcon']."</p></div>";
        echo "<div><p>พืชสมุนไพรมีกลิ่นไหม : ".$row['Smell']."</p></div>";
        echo "<div><p>มียางไหม : ".$row['Sap']."</p></div>";
        echo "<div><p>มีอาการคันไหม : ".$row['Itching']."</p></div>";
        echo "<div><p>หัวพืชสมุนไพรอยู่ในดินไหม : ".$row['Tubercrop']."</p></div>";
        echo "<div><p>ประเภทของพืชสมุนไพร : ".$row['HerbType']."</p></div>";
        echo "<div><p>ขนาดของพืชสมุนไพร : ".$row['Herbsize']."</p></div>";
        
        echo "<div><p>คุณสมบัติของพืชสมุนไพร :".$row['Properties']."</p></div>";
        echo "<div><p>รหัสฤดู :".$row['SeasonID']."</p></div>";
        echo "<div><p>รหัสวงศ์ :".$row['HerbfamilyID']."</p></div>";
    
    }
    mysqli_close($conn);
    ?>
    <a href="reportherbadmin.php" class="btn btn-outline-primary">กลับหน้าเดิม</a>
    </div>

<br>






   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</php>
