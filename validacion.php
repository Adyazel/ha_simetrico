<?php

include('connetion.php');

$correo = $_POST['correo'];
$pass = $_POST['pass'];

// Fetch user data from the database
$query = "SELECT pass, iv FROM usuarios WHERE correo = '$correo'";
$result = mysqli_query($conn, $query);
$user = mysqli_fetch_assoc($result);

if ($user) {
    // Decrypt the password
    $key = 'mardera1'; // Same key used for encryption
    $iv = base64_decode($user['iv']); // Decode the stored IV
    $decryptedPass = openssl_decrypt($user['pass'], 'AES-256-CBC', $key, 0, $iv);

    // Compare decrypted password with the input password
    if ($pass == $decryptedPass) {
        header("Location: home.html");
        // Start session, set session variables, etc.
    } else {
        // Password is incorrect
        header("Location: login.html?error=invalid_credentials");
    }
} else {
    // User not found
    header("Location: login.html?error=user_not_found");
}

?>

