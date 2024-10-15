<?php
// form1.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input</title>
</head>
<body>
    <h1>Form Input</h1>
    <form action="html_aman.php" method="POST">
        <label for="input">Masukkan sesuatu:</label>
        <input type="text" id="input" name="input" required><br><br>

        <label for="email">Masukkan email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <button type="submit">Kirim</button>
    </form>
</body>
</html>
