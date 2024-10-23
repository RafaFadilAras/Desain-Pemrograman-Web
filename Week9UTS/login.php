<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Grand Rafcol's Hotel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
        }
        .header {
            background-color: #FFB6C1;
            padding: 15px;
            text-align: left;
            color: black;
            font-size: 24px;
            font-weight: bold;
        }
        .login-container {
            max-width: 400px;
            margin: 100px auto;
            padding: 30px;
            border: 1px solid #FFB6C1;
            border-radius: 10px;
            background-color: white;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }
        .login-container h2 {
            font-size: 18px;
            margin-bottom: 20px;
            color: #333;
        }
        .form-group {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 15px;
        }
        .form-group label {
            font-size: 14px;
            color: #333;
            margin-right: 10px;
            width: 30%;
        }
        .form-group input {
            width: 70%;
            padding: 8px;
            border: 1px solid #FFB6C1;
            border-radius: 5px;
            transition: all 0.3s ease-in-out;
        }
        .form-group input:focus {
            border-color: #FF69B4;
            box-shadow: 0 0 5px rgba(255, 182, 193, 0.5);
            outline: none;
        }
        .login-container input[type="submit"] {
            background-color: #FF69B4;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 5px;
            width: 100%;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease-in-out;
        }
        .login-container input[type="submit"]:hover {
            background-color: #FF1493;
        }
        .login-container p {
            margin-top: 15px;
            font-size: 14px;
            color: #333;
        }
        @media (max-width: 768px) {
            .form-group {
                flex-direction: column;
                align-items: flex-start;
            }
            .form-group label, .form-group input {
                width: 100%;
            }
        }
        .footer {
            background-color: rgba(255, 182, 193, 0.8); /* Sama seperti header */
            padding: 10px;
            text-align: right;
            position: relative;
            bottom: 0;
            width: 100%;
            font-size: 14px;
            color: #333;
        }
        .footer a {
            color: #FF69B4;
            text-decoration: none;
        }
        .footer a:hover {
            text-decoration: underline;
        }

    </style>
</head>
<body>

    <!-- Header -->
    <div class="header">
        Grand Rafcol's Hotel
    </div>

    <!-- Login Form -->
    <div class="login-container">
        <h2>Mohon login terlebih dahulu</h2>
        <form action="home.php" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password">
            </div>
            <input type="submit" value="LOGIN">
    </div>

    <div class="footer">
        &copy; 2024 Grand Rafcol's Hotel | <a href="#">Kebijakan Privasi</a> | <a href="#">Kontak Kami</a>
    </div>

</body>
</html>
