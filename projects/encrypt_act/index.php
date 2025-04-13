<?php
if (!empty($_GET['user']) && !empty($_GET['pass'])){

  $pass = $_GET['pass'];
  // $simple_string = $_GET['pass'];
  // echo "Original String: " . $simple_string."<br>";
  $ciphering = "AES-128-CTR";
  $iv_length = openssl_cipher_iv_length($ciphering);
  $options = 0;
  $encryption_iv = '1234567891011121';
  $encryption_key = "GeeksforGeeks";
  $encryptionPass = openssl_encrypt($pass, $ciphering, $encryption_key, $options, $encryption_iv);
  // echo "Encrypted String: " . $encryption . "/n"."<br>";
  header("Location:encrypt.php?password=$encryptionPass");
}
 ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Encrypt Login Form</title>
  </head>
  <body class="bg-dark">
    <div class="container">
          <div class="row">
            <div class="col-md-12">
                <form class="box col-md-12" method="GET">
                  <h1>3ncryption</h1>
                  <br>
                  <br>
                  <br>
                  <p class="text-muted">Enter username and password</p>
                  <input type="text" name="user" value="" placeholder="Username">
                  <input type="password" name="pass" placeholder="Password">
                  <button type="submit" name="button">Log In</button>
                </form>
            </div>
          </div>
      </div>



    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/72d5c8080c.js" crossorigin="anonymous"></script>
  </body>
</html>
