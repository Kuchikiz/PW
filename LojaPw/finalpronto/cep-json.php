<?php include('cep.php');

$meuCep = $_POST['cep'];

$url = "https://viacep.com.br/ws/$meuCep/json/";
$json = file_get_contents($url);    
$data = json_decode($json);
echo "<div class='Textocep'>";
echo $data->logradouro . "<br />";
echo $data->bairro . "<br />";
echo $data->localidade . "<br />";
echo $data->uf . "<br />";
echo "</div>";


?>