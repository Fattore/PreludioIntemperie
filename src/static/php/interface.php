<?php
require_once 'connection.php'; 

// interface
$actuallife =  $_POST['actuallife'];
$maxlife = $_POST['maxlife'];
$actualsanity =  $_POST['actualsanity'];
$maxsanity = $_POST['maxsanity']/
$actualocultism = $_POST['actualocultism'];
$maxocultism = $_POST['maxocultism'];
$extradamage = $_POST['extradamage'];
$body = $_POST['body'];
$paranormal = $_POST['paranormal'];
    
$sql = "INSERT INTO Interface VALUES ('$actuallife','$maxlife','$actualsanity','$maxsanity','$actualocultism','$maxocultism','$extradamage','$body','$paranormal')";

if(mysqli_query($conn, $sql)){
    echo "<h3>data stored in a database successfully.</h3>"; 
} else{
    echo "ERROR: Hush! Sorry $sql. " 
        . mysqli_error($conn);
}

mysqli_close($conn);
?>