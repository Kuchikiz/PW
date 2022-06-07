<?php  include('codi.php');
//API utilizada: 
//https://8gwifi.org/docs/php-encrypt.jsp

// php AES-128-CBC Encryption Example

$plaintext = $_POST['texte'];  
$key = $_POST['keye'];  
  
$ivlen = openssl_cipher_iv_length($cipher="aes-128-cbc");  
  
//Generate Random IV

$iv = openssl_random_pseudo_bytes($ivlen);  
$ciphertext_raw = openssl_encrypt($plaintext, $cipher, $key, $options=OPENSSL_RAW_DATA, $iv);  
$ciphertext = base64_encode( $iv.$ciphertext_raw );  
echo "<div class='Textocodi'>";
echo "Texto Codificado: $ciphertext \n";  
echo "</div>";

//php AES-128-CBC Dec Example  
$c = base64_decode("$ciphertext");  
$ivlen = openssl_cipher_iv_length($cipher="aes-128-cbc");  
$iv = substr($c, 0, $ivlen);  
$ciphertext_raw = substr($c, $ivlen);  
  
$original_plaintext = openssl_decrypt($ciphertext_raw, $cipher, $key, $options=OPENSSL_RAW_DATA, $iv);  
echo "<div class='Textocodi'>";
echo "Texto Descodificado: $original_plaintext\n";  
echo "</div>";
echo "<div class='Textocodi'>";
echo "Chave utilizada: $key";
echo "</div>";

?>