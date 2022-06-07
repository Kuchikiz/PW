<?php include("cabecalho.php"); 
        include("conexão.php");
        include("verifica_login.php");
        ?>
        

<link rel="stylesheet" href="style-menu.css">

    <section>

            <div>
             
                <h1 class="titulo"> Categoria </h1>
                <h2 class="subtitulo">Insira as informações para cadastrar sua categoria.</h2>

            </div>
    </section>
    <section>
    <form action ="categoria-salvar.php" method="post" class="form"> 
        <fieldset class="fform">

        <div class = "Texto">

        <label for="Idcategoria">ID da Categoria</label>   
        <input type="text"  name="idcategoria" placeholder="ID da Categoria" id="idcat" value="<?php echo @$_GET['id']; ?>"/>

        </br>   
        <label for="CategoriaNome">Nome da Categoria</label>   
        <input type="text"  name="txCatname" placeholder="Nome da Categoria" id="idcatname" value="<?php echo @$_GET['nomecat']; ?>"/>
        </div>
        </br>

        <div class="">
            <input type="submit" value="Salvar" class="button" />
        </div>
</fieldset>
    </form>

</section>

<section>



   
            <div> 
                
            </div>
        <?php
            $stmt = $pdo->prepare("select p.idCategoria,c.Categoria
					from tbcategoria p
					inner join tbcategoria c
					on p.idCategoria = c.idCategoria");	
					$stmt ->execute();
			?>		
            <table border="1" class = "tabela" cellspacing="3">
            <tbody>
            <?php
                echo "<th> ID </th>";
                echo "<th> Categoria </th>";
                echo "<th> &nbsp </th>";
                echo "<th> &nbsp </th>";
					while($row = $stmt ->fetch(PDO::FETCH_BOTH)){

						echo "<tr>";
							echo "<td> $row[0] </td>";
							echo "<td>" .utf8_encode($row[1]) ."</td>";
                            echo "<td>";
                                echo "<a href='categoria-excluir.php?id=$row[0]'> Excluir </a>"; 
                           echo "</td>";
                            echo "<td>";
                           echo "<a href = '?id=$row[0]&nomecat=$row[1]' >";
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