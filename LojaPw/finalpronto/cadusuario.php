<?php
include('conexão.php');

?>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css"> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuario</title>
</head>
<body>
    
    <form class="form" action="cadastro-salvar.php" method="post">
			<h2 class="text-center">Cadastre-se</h2>		
			<div class="text-center social-btn">
			</div>
			<div class="form-group">
				<div class="input-group">                
					<div class="input-group-prepend">
						<span class="input-group-text"><span class="fa fa-user"></span></span>                    
					</div>
					<input type="text" class="form-control" name="user" placeholder="Usuário">
				</div>
			</div>
			<div class="form-group">
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fa fa-lock"></i></span>                    
					</div>
					<input type="password" class="form-control" name="senha" placeholder="Senha">
				</div>
			</div>        
			<div class="form-group">
				<button type="submit" class="btn btn-success btn-block login-btn">Cadastrar</button>
			</div>
			
			
		</form>

    </form>
	<center> <a href="login.php">Já possui cadastro? Faça login agora!</a> </center>
</body>
</html>