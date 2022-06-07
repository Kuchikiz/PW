<?php include("cabecalho.php"); 
        include("conexão.php");
        include("verifica_login.php");
        ?>
        

<link rel="stylesheet" href="style-menu.css">

    <section>

            <div>
             
                <h1 class="titulo"> Codificador </h1>
                <h2 class="subtitulo">Insira um texto para codificar</h2>

            </div>
    </section>
    <section>
    <form action ="codif-json.php" method="post" class="form"> 
        <fieldset class="fform">

        <div class = "Texto">

        <label for="">Texto para Codificar</label>   
        <input type="text"  name="texte" placeholder="Texto para Codificar" id="idcatname"/>
        </div>
        <div class = "Texto">

        <label for="">Chave para decodificação</label>   
        <input type="text"  name="keye" placeholder="Insira a chave" id="idcatname"/>
        </div>
</br>

        <div class="">
            <input type="submit" value="Enviar" class="button" />
        </div>
</fieldset>
    </form>

</section>

<?php include("rodape.php"); ?>