
<?php include("cabecalho.php");
        include("conexão.php"); 
        include("verifica_login.php");
        ?>

<link rel="stylesheet" href="style-menu.css">
    <div id="top">
        
      <h1 class="titulo"> Produto </h1>
        <h2 class="subtitulo">Insira as informações para cadastrar seu produto.</h2>

    </div>
    

<section>
    <form action ="produto-salvar.php" method="post" class="form">
        <fieldset class="fform">
            
        
    <div class="center">
        <div class="Texto">
            
        <label for="Produto">ID do Produto: </label>   
        <input type="text"  name="idproduto" placeholder="ID do Produto" id="idprod" value="<?php echo @$_GET['idprod']; ?>"/>

        </br></br>
        <label for="Produto">Produto: </label>    
        <input type="text"  name="txProduto" placeholder="Produto" id="produto" value="<?php echo @$_GET['nomeproduto']; ?>"/>
        </div>
</br>
        
        <div class="Texto">
        <label for="IdCategoria">Categoria: </label> 
        <?php
        
        echo "<select name='txidCategoria'>";
            $stmt = $pdo->prepare("Select * from tbcategoria ");
            $stmt ->execute();
            echo "<option selected disabled value=''> Selecione uma Categoria </option>";
            while($row = $stmt ->fetch(PDO::FETCH_BOTH)){
                echo "<option value='$row[0]'> $row[1] </option>";
            }

            
            echo "</select>";
            ?>
        </div> 
</br>
        <div class="Texto">
        <label for="Valor">Valor: </label>       
        <input type="text"  name="txValor" placeholder="Valor" id="valor" value="<?php echo @$_GET['prodvalor']; ?>"/>
        </div>
</br>
        <div class="">
            <input type="submit" value="Salvar" class="button"/>
        </div>
    </div>
</fieldset>
    </form>

</section>



    <section>



            <div> 
                
            </div>
        <?php
            $stmt = $pdo->prepare("select p.idProduto,p.produto,c.categoria,p.valor,p.idCategoria
					from tbproduto p
					inner join tbcategoria c
					on p.idCategoria = c.idCategoria");	
					$stmt ->execute();
			?>		
            <table border="1" class = "tabela" cellspacing="3">
            <tbody>
            <?php
                echo "<th> ID </th>";
                echo "<th> Produto </th>";
                echo "<th> Categoria </th>";
                echo "<th> Valor </th>";
                echo "<th> &nbsp </th>";
                echo "<th> &nbsp </th>";
					while($row = $stmt ->fetch(PDO::FETCH_BOTH)){

						echo "<tr>";
							echo "<td> $row[0]</td>";
							echo "<td>" .utf8_encode($row[1]) ."</td>";
							echo "<td>" .utf8_encode($row[2]) ."</td>";
							echo "<td> $row[3] </td>";
                            echo "<td>";
                                echo "<a href='produto-excluir.php?id=$row[0]'> Excluir </a>"; 
                           echo "</td>";
                           echo "<td>";
                           echo "<a href = '?idprod=$row[0]&nomeproduto=$row[1]&prodvalor=$row[3]' >";
                            echo "Alterar";

                           echo "</a>";
                           echo "</td>";
						echo "</tr>";					
					}	
                    ?>
                    </tbody>
                    </table>
    </section>

<?php include("rodape.php"); ?>
