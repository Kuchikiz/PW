<?php
    include("conexão.php");
    $id = $_GET["id"];
    $stmt = $pdo->prepare("delete from tbproduto where idProduto='$id'");	
    $stmt ->execute();
    header("location:produto.php");
?>