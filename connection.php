<?php
// $db_servername = "localhost";
// $db_database = "rspgpnru_pnruplant";
// $db_username = "rspgpnru_pnruplant";
// $db_password = "plant*";


// // Create connection
// $conn = mysqli_connect($db_servername, $db_username, $db_password,   $db_database);
// mysqli_set_charset($conn,"utf8");


// //-------- for test----------------
$db_servername = "localhost";
$db_database = "herbpnru";
$db_username = "root";
$db_password = "";
$conn = mysqli_connect($db_servername, $db_username, $db_password,   $db_database);
mysqli_set_charset($conn,"utf8");



// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>