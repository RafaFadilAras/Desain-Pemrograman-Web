<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f7f7f7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .logout-container {
            text-align: center;
            background-color: lightpink;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .logout-container h2 {
            color: #4a4a4a;
        }
        .logout-container a {
            margin-top: 20px;
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>
    <div class="logout-container">
        <h2>Anda berhasil Logout. See You!</h2>
        <p>Terima kasih telah menggunakan layanan kami.</p>
        <a href="login.php" class="btn btn-primary">Kembali ke halaman Login</a>
    </div>
</body>
</html>
