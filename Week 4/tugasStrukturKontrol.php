<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

sort($nilaiSiswa);

$nilaiTengah = array_slice($nilaiSiswa, 2, 6);
$rataRataNilai = array_sum($nilaiTengah);

echo "Rata-rata nilai setelah mengabaikan 2 nilai tertinggi dan 2 nilai terendah: $rataRataNilai<br>";


$harga_produk = 120000;

$diskon_persen = 20;

if ($harga_produk > 100000) {
    $diskon = ($diskon_persen / 100) * $harga_produk;
    $harga_setelah_diskon = $harga_produk - $diskon;
} else {
    $harga_setelah_diskon = $harga_produk; 
}

echo "Harga produk: Rp  $harga_produk <br> ";
echo "Diskon: Rp  $diskon <br> ";
echo "Harga yang harus dibayar setelah diskon: Rp  $harga_setelah_diskon <br> ";

$poin = 550; 

echo "Total skor pemain adalah: $poin <br>";

if ($poin > 500) {
    echo "Apakah pemain mendapatkan hadiah tambahan? YA";
} else {
    echo "Apakah pemain mendapatkan hadiah tambahan? TIDAK";
}

?>