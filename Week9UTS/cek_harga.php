<?php
session_start();

$room_types = [
    "standard" => 300000,
    "superior" => 400000,
    "deluxe" => 500000
];

$harga_total = 0;
$diskon = 0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $type = $_POST["type"];
    $floor = $_POST["floor"];
    $days = $_POST["days"];
    $discount = $_POST["discount"];

    $harga_perhari = $room_types[$type];
    $harga_sewa = $harga_perhari * $days;
    $tambahan = ($floor > 5) ? 50000 : 0;
    $harga_total = $harga_sewa + $tambahan;

    if ($discount == "member") {
        $diskon = $harga_total * 0.1;
    } elseif ($discount == "promo") {
        $diskon = 100000;
    }
    
    $harga_total -= $diskon;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Harga</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <style>
        .form-container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: lightpink;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
        .btn-primary {
            background-color: #343a40; /* Warna biru tua, kontras dengan pink */
            border-color: #343a40;
        }
        .navbar {
            background-color: #FFB6C1; 
        }
        .navbar-brand {
            font-weight: bold;
            color: black;
        }
        .navbar-nav .nav-link {
            color: black;
        }
        .navbar-nav .nav-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">Grand Rafcol's Hotel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cek_harga.php">Cek Harga</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container form-container">
        <h2 class="text-center">Cek Harga Kamar</h2>
        <form method="POST">
            <div class="mb-3">
                <label>Tipe Kamar</label>
                <select name="type" class="form-select">
                    <option value="standard">Standard - Rp 300.000</option>
                    <option value="superior">Superior - Rp 400.000</option>
                    <option value="deluxe">Deluxe - Rp 500.000</option>
                </select>
            </div>

            <div class="mb-3">
                <label>Lantai</label>
                <input type="number" name="floor" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Jumlah Hari</label>
                <input type="number" name="days" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Diskon</label>
                <select name="discount" class="form-select">
                    <option value="none">Tidak Ada</option>
                    <option value="member">Member (10%)</option>
                    <option value="promo">Promo HUT (Rp 100.000)</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary w-100">CHECK</button>
        </form>

        <?php if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>
            <div class="alert alert-info mt-3">
                <p><strong>Total Transaksi:</strong> Rp <?php echo number_format($harga_sewa + $tambahan, 0, ',', '.'); ?></p>
                <p><strong>Total Diskon:</strong> Rp <?php echo number_format($diskon, 0, ',', '.'); ?></p>
                <p><strong>Jumlah yang Harus Dibayar:</strong> Rp <?php echo number_format($harga_total, 0, ',', '.'); ?></p>
            </div>
        <?php } ?>

        <nav class="mt-4 text-center">
            <a href="home.php" class="btn btn-secondary">Home</a>
            <a href="logout.php" class="btn btn-danger">Logout</a>
        </nav>
    </div>
</body>
</html>
