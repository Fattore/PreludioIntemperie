<?php  
// Database configuration
$dbHost     = "localhost";  
$dbUsername = "root";
//$dbPassword = "5487";  // Murilo
$dbPassword = "seguro_"; // Pastel  
//$dbHost     = "sql308.epizy.com";  
//$dbUsername = "epiz_30427948";  
//$dbPassword = "GEvvKahp7q0IR44";  
$dbName     = "epiz_30427948_ficha";  
  
// Create database connection  
$conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);  

// Check connection  
if ($conn->connect_error) {  
    die("Connection failed: " . $db->connect_error);  
}