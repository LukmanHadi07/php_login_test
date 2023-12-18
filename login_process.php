<?php 

// validasi Username
if(empty($_POST['username'])) {
    echo "Username harus diisi";
    exit;
}
// validasi Password
if(empty($_POST['password'])) {
    echo "Password harus diisi";
    exit;
}


// Mengecek apakah password adalah kebalikan dari username
$username = $_POST['username'];
$password = "";

for ($i = strlen($username) - 1; $i >= 0; $i--) {
    $password .= $username[$i];
}


// Jika password adalah kebalikan dari username, maka login berhasil
if ($_POST['password'] == $password) {
    echo "Login berhasil";
} else {
    echo "Login gagal";
}
