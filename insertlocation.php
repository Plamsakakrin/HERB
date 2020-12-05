<?php
//$db_servername = "localhost";
//$db_database = "pnruplant";
//$db_tablename = "testplant";
//$db_username = "root";
//$db_password = "";

include('connection.php');

    $AreaID = $_POST['AreaID'];
    $ZoneID= $_POST['ZoneID'];
    $HerbID= $_POST['HerbID'];
    $Statusdate= $_POST['Statusdate'];
    $Status= $_POST['Status'];
    $Longitude= $_POST['Longitude'];
    $Latitude= $_POST['Latitude'];
    $sql = "INSERT INTO `area` (`AreaID`, `ZoneID`, `HerbID`, `Statusdate`, `Status`, `Longitude`, `Latitude`)
            VALUES ('$AreaID', '$ZoneID', '$HerbID', ' $Statusdate', '$Status', '$Longitude', '$Latitude')";




    if (mysqli_query($conn, $sql)) {
   	    echo "บันทึกข้อมูลเรียบร้อย";
    } else {
   	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

