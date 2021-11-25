<?php
require_once 'connection.php'; 

// detalhespessoais
$dtname =  $_POST['dtname'];
$dtplayer = $_POST['dtplayer'];
$dtocuppation =  $_POST['dtocuppation'];
$dtyears = $_POST['dtyears'];
$dtgenre = $_POST['dtgenre'];
$dtbirthplace = $_POST['dtbirthplace'];
$dthome = $_POST['dthome'];

$sql = "INSERT INTO DetalhePessoal VALUES ('$dtname','$dtplayer','$dtocuppation','$dtyears','$dtgenre','$dtbirthplace','$dthome')";

if(mysqli_query($conn, $sql)){
    echo "Success";
} else{
    echo "Failure" . mysqli_error($conn);
}

mysqli_close($conn);
?>