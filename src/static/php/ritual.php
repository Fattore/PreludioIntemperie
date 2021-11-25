<?php
require_once 'connection.php'; 

// ritual
$ritualNome =  $_POST['ritualNome'];
$ritualElemento = $_POST['ritualElemento'];
$ritualConjuracao =  $_POST['ritualConjuracao'];
$ritualEfeito = $_POST['ritualEfeito'];
$ritualCusto = $_POST['ritualCusto'];

$sql = "INSERT INTO Ritual VALUES ('$ritualNome','$ritualElemento','$ritualConjuracao','$ritualEfeito','$ritualCusto')";

if(mysqli_query($conn, $sql)){
    echo "Success";
} else{
    echo "Failure" . mysqli_error($conn);
}

mysqli_close($conn);
?>