<?php include("cabecalho.php"); 
        include("conexão.php");
        include("verifica_login.php");
       ?>
        

<link rel="stylesheet" href="style-menu.css">

    <section>

            <div>
                <h1 class="titulo"> Consultar CEP</h1>
            </div>
    </section>
    <section>
    <form action ="cep-json.php" method="post" class="form"> 
        <fieldset class="fform">

        <div class = "Textocep">

        <label for="CEP">Insira o CEP</label>   
        <input type="text"  name="cep" placeholder="12345678" id="idcatname"/>
        </div>
        </br>

        <div class="">
            <input type="submit" value="Enviar" class="button" />
        </div>
</fieldset>
    </form>

</section>



