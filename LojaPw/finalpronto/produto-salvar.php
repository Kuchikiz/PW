<?php
    include('conexão.php');
   
    $idprod = $_POST['idproduto'];
    $produto = $_POST['txProduto'];
    $idCat = $_POST['txidCategoria'];
    $valor = $_POST['txValor'];

    if(strlen($_POST['idproduto']) == 0) {
        $stmt = $pdo->prepare("insert into tbproduto values (null, '$produto', $idCat, $valor)");
        $stmt ->execute();
    } else {
        if ($idprod == $_POST['idproduto'])
        {
        $stmt = $pdo -> prepare ("update tbproduto set produto='$produto', idCategoria='$idCat', valor='$valor' where idProduto='$idprod'");
        $stmt -> execute();
        }
    }
    
    header("location:produto.php");
?>