<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['username'] = $_POST['username'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"></script>
    <style>
        /* Styling navbar */
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

        /* Styling banner */
        .carousel-slide {
            width: 50%;
            max-width: 1000px;
            border-radius: 10px;
            object-fit: cover;
            margin: 20px;
        }

        /* Footer styling */
        .footer {
            background-color: #FFB6C1; 
            color: black;
            padding: 10px 0;
            text-align: right;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

        .hotel-profile {
            font-size: 25px;
            text-align: left;
            margin-left: 50px;
        }

        .hotelprofile {
            font-size: 20px;
            text-align: left;
            margin-left: 50px;
            margin-right: 50px;
        }

    </style>
</head>
<body>

    <!-- Navbar -->
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
        
        <!-- Banner Carousel -->
        <div id="bannerCarousel" class="carousel-slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="banner1.jpg" class="d-block w-100 banner" alt="Banner 1">
                </div>
                <div class="carousel-item">
                    <img src="banner2.jpg" class="d-block w-100 banner" alt="Banner 2">
                </div>
                <div class="carousel-item">
                    <img src="banner3.jpg" class="d-block w-100 banner" alt="Banner 3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#bannerCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#bannerCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </button>
        </div>

        <!-- Profil Hotel -->
        <div class="hotel-profile">
            <h2>Hotel Profile</h2>
            
        </div>
        <div class="hotelprofile">
            <p>
                Grand Rafcol's Hotel is located in the heart of Malang, in the prestigious area of Grand
                Rafcol's Hotel where generations of urban dwellers have enjoyed high quality lifestyle. While
                having the green, natural living atmosphere and also the luxurious facilities in whithin the 
                premise, you will also have easy access to businerss districts; lively shopping malls and restaurants;
                prominent international schools and hospitals. 
            </p>
        </div>
        
    </div>

    <!-- Footer -->
    <div class="footer">
        &copy; 2024 Grand Rafcol's Hotel | <a href="#">Kebijakan Privasi</a> | <a href="#">Kontak Kami</a>
    </div>

</body>
</html>
