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
      <h2>รายงานพืชสมุนไพรทั้งหมด</h2>
    </div></br>
  </div>
  <br><br>
<div class="container-fluid">
        <!--Showdata-->
    <?php
    //1. เชื่อมต่อ database: 
    include('connection.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี

    //2. query ข้อมูลจากตาราง tb_member: 
    $query = "SELECT * FROM `herb` desc" or die("Error:" . mysqli_error());
    //3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result . 
    $result = mysqli_query($conn,"select * from herb");
    //4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล: 

    echo "<table class='table table-striped '>";
    echo "<thead>";
    //หัวข้อตาราง
    echo "<tr>

        <th>HerbID</th>
        <th>HerbName</th>
        <th>HerbScince</th>
        <th>Snuff</th>
        <th>Wood</th>
        <th>Dopey</th>
        <th>Bough</th>
        <th>Fruit</th>  
        <th>Thorn</th>
        <th>Smell</th>
        <th>Sap</th>
        <th>Tuber crop</th>
        <th>Itching</th>
        <th>Herbtype</th>
        <th>Herbsize</th>
        <th>Properties</th>
        <th>action</th>
        <th>action</th>
    </tr>";
    echo "</thead>";
    echo "<tbody>";


    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        
        echo "<th>" . $row[0] .  "</th> ";
        echo "<td>" . $row[1] .  "</td> ";
        echo "<td>" . $row[2] .  "</td> "; 
        echo "<td>" . $row[3] .  "</td> "; 
        echo "<td>" . $row[4] .  "</td> "; 
        echo "<td>" . $row[5] .  "</td> "; 
        echo "<td>" . $row[6] .  "</td> "; 
        echo "<td>" . $row[7] .  "</td> "; 
        echo "<td>" . $row[8] .  "</td> "; 
        echo "<td>" . $row[9] .  "</td> "; 
        echo "<td>" . $row[10] .  "</td> "; 
        echo "<td>" . $row[11] .  "</td> "; 
        echo "<td>" . $row[12] .  "</td> "; 
        echo "<td>" . $row[13] .  "</td> "; 
        echo "<td>" . $row[14] .  "</td> "; 
      echo "<td>" . $row[16] .  "</td> ";
        //เมนูดูข้อมูลอัพเดท
        echo "<td><a href='showdataherbadmin.php?ID=$row[0]'>ดูข้อมูลพืชสมุนไพร</a> 
        </td>  ";


 echo "<td><a href='formeditherb.php?ID=$row[0]'>แก้ไขข้อมูล</a><br><a href='formdeleteherb.php?HerbID=$row[0]' onclick=\"return confirm('ต้องการลบข้อมูลหรือไม่')\">ลบข้อมูล</a></td> ";
  echo "</tr>";


        //ลบข้อมูล
    }
    echo "</table>";
    //5. close connection
    mysqli_close($conn);
    ?>
    </div>




















  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</php>


