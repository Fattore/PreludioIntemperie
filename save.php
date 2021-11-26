<?php

    if(isset($_POST['step1'])&&isset($_POST['step2'])&&isset($_POST['step3'])) {
        echo "You chose " . $_POST['step1']." and ".$_POST['step2']." and ".$_POST['step3'].". Well done.";die;
    }
  

    if (isset($_POST['action'])) {
        switch ($_POST['action']) {
            case 'salvar':
                salvar();
                break;
        }
    }

    function salvar() {
        echo "The select function is called.";

        require_once 'connection.php'; 

        include('detalhe.php');
        include('interface.php');
        include('atributo.php');
        include('combate.php');
        include('pericia.php');
        include('inventario.php');
        include('ritual.php');
        
        if(mysqli_query($conn, $sql)) {
            echo "Success";
        } else {
            echo "Failure" . mysqli_error($conn);
        }
        
        mysqli_close($conn);
        exit;
    }
?>