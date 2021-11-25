<?php
require_once 'connection.php'; 

// atributo
$apparence =  $_POST['apparence'];
$constitution =  $_POST['constitution'];
$dexterity =  $_POST['dexterity'];
$education =  $_POST['education'];
$force =  $_POST['force'];
$intelligence =  $_POST['intelligence'];
$power =  $_POST['power'];
$luck =  $_POST['luck'];
$moviment =  $_POST['moviment'];
$size =  $_POST['size'];

$sql = "INSERT INTO Atributo VALUES ('$apparence','$constitution','$dexterity','$education','$force','$intelligence','$power','$luck','$moviment',$size')";

if(mysqli_query($conn, $sql)){
    echo "<h3>data stored in a database successfully.</h3>"; 
} else{
    echo "ERROR: Hush! Sorry $sql. " 
        . mysqli_error($conn);
}

mysqli_close($conn);
?>