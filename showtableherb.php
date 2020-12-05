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
<!--============Navbar============================-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top "style="background-color:#9370db;">
  <a class="navbar-brand" href="search.php">

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
      <a class="nav-link" style="color: white;" href="loginadmin.php">Sign In</a>
    </div>
  </div>
</div>
</nav>
<!--==========Navbar==================-->

</br></br></br></br>

<div class="feature-section">
  <div class="container">
    <div class="text-center" mb-5>
      <h2>ข้อมูลพืชสมุนไพร</h2>
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
        <th>Herbtype</th>
      <th>Herbsize</th> 
        <th>action</th>
    </tr>";
    echo "<tbody>";


    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        
        echo "<th>" . $row[0] .  "</th> ";
        echo "<td>" . $row[1] .  "</td> ";
        echo "<td>" . $row[2] .  "</td> "; 
        echo "<td>" . $row[13] .  "</td> "; 
      echo "<td>" . $row[14] .  "</td> ";
        //เมนูดูข้อมูลอัพเดท
        echo "<td><a href='#?ID=$row[0]'>ดูข้อมูลพืชสมุนไพร</a> 
        <br></td>  ";
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


