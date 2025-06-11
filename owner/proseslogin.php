<?php


$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Validasi dasar (bisa diperluas)
if (empty($username) || empty($email) || empty($dbname) || empty($password)) {
    echo "Semua field harus diisi!";
} else {
    // Contoh output (gantilah dengan logika autentikasi sebenarnya)
    echo "<h2>Login Berhasil</h2>";
    echo "Username: $username<br>";
    echo "Email: $email<br>";
    
}
?>
