<?php
// Ambil nilai username dan password dari formulir
$username = $_POST['username'];
$password = $_POST['password'];

// Periksa apakah username dan password sesuai
if ($username == "admin" && $password == "1234") {
    // Jika sesuai, mulai sesi
    session_start();

    // Simpan data pengguna ke dalam sesi
    $_SESSION["username"] = $username;
    $_SESSION["status"] = "login";

    // Tampilkan pesan sukses dan link ke halaman home
    echo "Anda berhasil login. Silahkan menuju <a href='homeSession.php'>Halaman Home</a>";
} else {
    // Jika tidak sesuai, tampilkan pesan gagal dan link ke form login
    echo "Gagal login. Silahkan login lagi <a href='sessionLoginForm.html'>Halaman Login</a>";
}
?>