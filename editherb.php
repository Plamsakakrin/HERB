<?php
include('connection.php');

// $PlantID = $_POST['PlantID'];
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
$Properties= $_POST['Properties'];
$sql = "UPDATE herb
SET `HerbID` = '".$HerbID."', 
`HerbName` = '".$HerbName."', 
`Herbscience` = '".$Herbscience."', 
`Snuff` = '".$Snuff."', 
`Wood` = '".$Wood."', 
`Dopey` = '".$Dopey."', 
`Bough` = '".$Bough."', 
`Fruit` = '".$Fruit."', 
`Thorn` = '".$Thorn."', 
`Smell` = '".$Smell."', 
`Sap` = '".$Sap."', 
`Itching` = '".$Itching."', 
`Tubercrop` = '".$Tubercrop."', 
`HerbType` = '".$HerbType."', 
`Properties` = '".$Properties."',  
`SeasonID` = '',
`HerbfamilyID` = ''
WHERE HerbID = '".$HerbID."'";
if (mysqli_query($conn, $sql)) {
   echo "แก้ไขข้อมูลเรียบร้อย";
} else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
