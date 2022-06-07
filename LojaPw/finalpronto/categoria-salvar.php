<?php
    include('conexão.php');
   

    $idCat = $_POST['idcategoria'];
    $txCat = $_POST['txCatname'];
   
    if(strlen($_POST['idcategoria']) == 0) {
        $stmt = $pdo->prepare("insert into tbCategoria values (null, '$txCat')");
        $stmt ->execute();
    } else {
        if ($idCat == $_POST['idcategoria'])
        {
        $stmt = $pdo -> prepare ("update tbCategoria set categoria='$txCat' where idCategoria='$idCat'");
        $stmt -> execute();
        }
    }
    header("location:categoria.php");
?>