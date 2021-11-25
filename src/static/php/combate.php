<?php
require_once 'connection.php'; 

// combate
$combatNome =  $_POST['combatNome'];
$combatTipo = $_POST['combatTipo'];
$combatDano =  $_POST['combatDano'];
$combatMunAtual = $_POST['combatMunAtual'];
$combatMunMax = $_POST['combatMunMax'];
$combatAtaque = $_POST['combatAtaque'];
$combatAlcance = $_POST['combatAlcance'];
$combatDefeito = $_POST['combatDefeito'];
$combatArea = $_POST['combatArea'];
    
$sql = "INSERT INTO Combate VALUES ('$combatNome','$combatTipo','$combatDano','$combatMunAtual','$combatMunMax','$combatAtaque','$combatAlcance','$combatDefeito','$combatArea')";

if(mysqli_query($conn, $sql)){
    echo "<h3>data stored in a database successfully.</h3>"; 
} else {
    echo "ERROR: Hush! Sorry. " 
        . mysqli_error($conn);
}

mysqli_close($conn);
?>