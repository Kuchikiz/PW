<?php
    include('conexão.php');
   

    
    $user= $_POST['user'];
    $senha= $_POST['senha'];
   

    $stmt = $pdo->prepare("insert into tbusuario values (null,  '$user', '$senha')");
    $stmt ->execute();

    header("location:login.php");
?>