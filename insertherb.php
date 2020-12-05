<?php
//$db_servername = "localhost";
//$db_database = "pnruplant";
//$db_tablename = "testplant";
//$db_username = "root";
//$db_password = "";
include('connection.php');

    $HerbID = $_POST['HerbID'];
    $HerbName= $_POST['HerbName'];
    $Herbscience= $_POST['Herbscience'];
    $Snuff= $_POST['Snuff'];
    $Wood= $_POST['Wood'];
    $Dopey= $_POST['Dopey'];
    $Bough= $_POST['Bough'];
    $Fruit= $_POST['Fruit'];
    $Thorn= $_POST['Thorn'];
    $Smell= $_POST['Smell'];
    $Sap= $_POST['Sap'];
    $Itching= $_POST['Itching'];
    $Tubercrop= $_POST['Tubercrop'];
    $HerbType= $_POST['HerbType'];
    $Herbsize= $_POST['Herbsize'];
    $Properties= $_POST['Properties'];
   $SeasonID= $_POST['SeasonID'];
    $HerbfamilyID= $_POST['HerbfamilyID'];
    $sql = "INSERT INTO `herb` (`HerbID`, `HerbName`, `Herbscience`, `Snuff`, `Wood`, `Dopey`, `Bough`, `Fruit`, `Thorn`, `Smell`, `Sap`, `Itching`, `Tubercrop`, `HerbType`, `Herbsize`, `Properties`, `SeasonID`, `HerbfamilyID`)
            VALUES ('$HerbID', '$HerbName', '$Herbscience', ' $Snuff', '$Wood', '$Dopey', '$Bough', ' $Fruit', '$Thorn', '$Smell', '$Sap', '$Itching', '$Tubercrop', '$HerbType', '$Herbsize', '$Properties', '$SeasonID', '$HerbfamilyID')";


            
    if (mysqli_query($conn, $sql)) {
   	    echo "บันทึกข้อมูลเรียบร้อย";
    } else {
   	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

