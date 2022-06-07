<?php
    include("conexão.php");
    $id = $_GET["id"];
    $stmt = $pdo->prepare("delete from tbcategoria where idCategoria='$id'");	
    $stmt ->execute();
    header("location:categoria.php");
?>