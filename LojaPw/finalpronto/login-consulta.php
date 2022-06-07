<?php
include('conexão.php');

session_start();


$login = $_POST['user'];
$senha = $_POST['senha'];

$loginbanco = "☻";
$senhabanco = "";

$stmt = $pdo->prepare("select loginuser, senhauser from tbusuario where loginuser='$login' and senhauser='$senha'");	
$stmt ->execute();			

while ($row = $stmt ->fetch(PDO::FETCH_BOTH)) {
    $loginbanco = $row['loginuser'];
    $senhabanco = $row['senhauser'];
    header("index.php");
}

if(strlen($_POST['user']) == 0) {
    echo "Preencha seu Usuario";
} else if(strlen($_POST['senha']) == 0) {
    echo "Preencha sua senha";
}



if ($login == $loginbanco && $senha == $senhabanco) {
    $_SESSION['autorizar'] = true;
    $_SESSION['user'] = $_POST["user"];
    header("location:index.php");
}
else {
    $_SESSION['autorizar'] =  false;
    unset($_SESSION['autorizar']);
    session_destroy();
    header("location:login.php");
}

?>