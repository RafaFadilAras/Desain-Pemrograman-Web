<?php
$input = $_POST['input'];
$input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

$email = $_POST['email'];
$email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); // Menghindari XSS pada email

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // Lanjutkan dengan pengolahan email yang aman
    echo "Input yang aman: " . $input . "<br>";
    echo "Email yang valid: " . $email;
} else {
    // Tangani input yang tidak valid
    echo "Email tidak valid. Silakan masukkan email yang benar.";
}
?>
