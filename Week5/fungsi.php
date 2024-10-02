<?php

// function perkenalan($nama, $salam="Assalamualaikum") {
//     echo $salam.", ";
//     echo "Perkenalkan, nama saya ".$nama."<br/>";
//     echo "senang berkenalan dengan Anda<br/>";
// }

// perkenalan("Rafa", "Hallo");

// echo "<hr>";

// $saya = "Rafa";
// $ucapanSalam = "Selamat pagi";

// perkenalan($saya);

// function hitungUmur($thn_lahir, $thn_sekarang) {
//     $umur = $thn_sekarang - $thn_lahir;
//     return $umur;
// }

// echo "Umur saya adalah " .hitungUmur(2004, 2024);

// function hitungUmur($thn_lahir, $thn_sekarang) {
//     $umur = $thn_sekarang - $thn_lahir;
//     return $umur;
// }

// function perkenalan($nama, $salam="Assalamualaikum") {
//     echo $salam.", ";
//     echo "Perkenalkan, nama saya ".$nama."<br/>";

//     echo "Saya berusia  " .hitungUmur(2004, 2024). " tahun<br/>";
//     echo "senang berkenalan dengan Anda<br/>";
// }

// perkenalan("Rafa");

// function tampilkanHalounia() {
//     echo "Halo Dunia! <br>";

//     tampilkanHalounia();
// }

// tampilkanHalounia();

// for ($i=1; $i <= 25; $i++) {
//     echo "Perulangan ke-{$i} <br>"
// }

function tampilkanAngka (int $jumlah, int $indeks = 1) {
    echo "Perulangan ke-{$indeks} <br>";

    if ($indeks < $jumlah) {
        tampilkanAngka($jumlah, $indeks + 1);
    }
}
tampilkanAngka(20);

?>

