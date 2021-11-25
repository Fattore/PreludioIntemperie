<?php
require_once 'connection.php'; 

// inventario
$pesoAtual = $_POST['pesototal'];
$itemNome =  $_POST['itemNome'];
$itemTipo = $_POST['itemTipo'];
$itemPeso =  $_POST['itemPeso'];

$sql = "INSERT INTO Inventario VALUES ('$pesoAtual','$itemNome','$itemTipo','$itemPeso')";

if(mysqli_query($conn, $sql)){
    echo "Success";
} else{
    echo "Failure" . mysqli_error($conn);
}

mysqli_close($conn);
?>