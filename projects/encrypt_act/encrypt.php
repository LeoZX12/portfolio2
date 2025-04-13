<?php
$decryption_iv = '1234567891011121';
$decryption_key = "GeeksforGeeks";
$ciphering = "AES-128-CTR";
$options = 0;

$decryptionPass = openssl_decrypt ($_GET['password'], $ciphering,
        $decryption_key, $options, $decryption_iv);



// echo $decryptionPass;
if ($decryptionPass == "12345") {
  echo "You are logged in";
}else{
  echo "Invalid Password";

}
?>
