<?php

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['autorizar'])) {
    die("Você não pode acessar esta página porque não está logado.<p><a href=\"login.php\">Entrar</a></p> </br> <p><a href=\"cadusuario.php\">Cadastrar</a></p");

}


?>