<?php 
    include("cabecalho.php");
    include("conexão.php");
    include("verifica_login.php");
    
?>


<?php
  if(isset($_SESSION['user'])) {
    echo '<h1> Bem vindo '. $_SESSION["user"]. "!</h1>";
  }



?>
  <a href="logout.php" class="logout"> Logout </a> 
<?php include("rodape.php"); ?>