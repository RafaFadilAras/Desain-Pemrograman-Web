<?php
// proses_validasi.php

$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];

// Validasi server-side
$errors = [];

if (empty($nama)) {
    $errors[] = "Nama harus diisi.";
}
if (empty($email)) {
    $errors[] = "Email harus diisi.";
}
if (strlen($password) < 8) {
    $errors[] = "Password harus minimal 8 karakter.";
}

if (!empty($errors)) {
    // Jika ada error, tampilkan semua pesan error
    echo implode(" ", $errors);
} else {
    // Jika tidak ada error, tampilkan pesan sukses
    echo "Data berhasil dikirim. Nama: $nama, Email: $email";
}
?>
