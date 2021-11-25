<?php
require_once 'connection.php'; 

// pericia
$antropologia = $_POST['antropologia'];
$arco = $_POST['arco'];
$pistola = $_POST['pistola'];
$rifle = $_POST['rifle'];
$arqueologia = $_POST['arqueologia'];
$arremessar = $_POST['arremessar'];
$arte = $_POST['arte'];
$avaliacao = $_POST['avaliacao'];
$charme = $_POST['charme'];
$chaveiro = $_POST['chaveiro'];
$ciencia = $_POST['ciencia'];
$eletrica = $_POST['eletrica'];
$mecanico = $_POST['mecanico'];
$contabilidade = $_POST['contabilidade'];
$direito = $_POST['direito'];
$auto = $_POST['auto'];
$disfarce = $_POST['disfarce'];
$eletronica = $_POST['eletronica'];
$encontrar = $_POST['encontrar'];
$escalar = $_POST['escalar'];
$escutar = $_POST['escutar'];
$esquivar = $_POST['esquivar'];
$furtividade = $_POST['furtividade'];
$historia = $_POST['historia'];
$intimidacao = $_POST['intimidacao'];
$labia = $_POST['labia'];
$natural = $_POST['natural'];
$outra = $_POST['outra'];
$lutar = $_POST['lutar'];
$medicina = $_POST['medicina'];
$mundonatural = $_POST['mundonatural'];
$natacao = $_POST['natacao'];
$navegacao = $_POST['navegacao'];
$credito = $_POST['credito'];
$ocultismo = $_POST['ocultismo'];
$maquinario = $_POST['maquinario'];
$persuasao = $_POST['persuasao'];
$pilotar = $_POST['pilotar'];
$prestidigitacao = $_POST['prestidigitacao'];
$socorros = $_POST['socorros'];
$psicanalise = $_POST['psicanalise'];
$psicologia = $_POST['psicologia'];
$rastrear = $_POST['rastrear'];
$saltar = $_POST['saltar'];
$seduzir = $_POST['seduzir'];
$sobrevivencia = $_POST['sobrevivencia'];
$biblioteca = $_POST['biblioteca'];
$computador = $_POST['computador'];
    
$sql = "INSERT INTO Pericias VALUES ('$antropologia','$arco','$pistola','$rifle',
'$arqueologia','$arremessar','$arte','$avaliacao',
'$charme','$chaveiro','$ciencia','$eletrica',
'$mecanico','$contabilidade','$direito','$auto',
'$disfarce','$eletronica','$encontrar','$escalar',
'$escutar','$esquivar','$furtividade','$historia',
'$intimidacao','$labia','$natural','$outra',
'$lutar','$medicina','$mundonatural','$natacao',
'$navegacao','$credito','$ocultismo','$maquinario',
'$persuasao','$pilotar','$prestidigitacao','$socorros',
'$psicanalise','$psicologia','$rastrear','$saltar',
'$seduzir','$sobrevivencia','$biblioteca','$computador')";

if(mysqli_query($conn, $sql)){
    echo "<h3>data stored in a database successfully.</h3>"; 
} else{
    echo "ERROR: Hush! Sorry $sql. " 
        . mysqli_error($conn);
}

mysqli_close($conn);
?>