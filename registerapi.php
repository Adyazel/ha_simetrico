<?php

include('connetion.php');

$info = [];
$data = [];

$pass = $_POST['pass'];
$correo = $_POST['correo'];
$pass2 = $_POST['pass2'];
$nombre = $_POST['nombre'];

// Encryption Key and Method
$key = 'mardera1'; // Replace with your own secure key
$method = 'AES-256-CBC'; // Encryption method
$iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length($method)); // Initialization Vector

if ($pass == $pass2) {
    // Encrypt the password
    $encryptedPass = openssl_encrypt($pass, $method, $key, 0, $iv);
    $ivEncoded = base64_encode($iv); // Encode IV for storage

    $queryList = "INSERT INTO usuarios(nombre, correo, pass, efirma, iv) VALUES ('" . $nombre . "', '" . $correo . "', '" . $encryptedPass . "', 'efirma', '" . $ivEncoded . "');";
    echo $queryList;
    $rsList = mysqli_query($conn, $queryList);
} else {
    header("Location: register.html");
}

if ($rsList) {
    header("Location: home.html");
} else {
    header("Location: register.html");
}

?>
