<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo $hasilTambah;
echo ("<br>");
echo $hasilKurang;
echo ("<br>");
echo $hasilKali;
echo ("<br>");
echo $hasilBagi;
echo ("<br>");
echo $sisaBagi;
echo ("<br>");
echo $pangkat;
echo ("<br>");

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo $hasilSama;
echo ("<br>");
echo $hasilTidakSama;
echo ("<br>");
echo $hasilLebihKecil;
echo ("<br>");
echo $hasilLebihBesar;
echo ("<br>");
echo $hasilLebihKecilSama;
echo ("<br>");
echo $hasilLebihBesarSama;
echo ("<br>");

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo $hasilAnd;
echo ("<br>");
echo $hasilOr;
echo ("<br>");
echo $hasilNotA;
echo ("<br>");
echo $hasilNotB;
echo ("<br>");

$hasilTambahPenugasan = $a += $b;
$hasilKurangPenugasan = $a -= $b;
$hasilKaliPenugasan = $a *= $b;
$hasilBagiPenugasan = $a /= $b;
$hasilSisaBagiPenugasan = $a %= $b;

echo $hasilTambahPenugasan;
echo ("<br>");
echo $hasilKurangPenugasan;
echo ("<br>");
echo $hasilKaliPenugasan;
echo ("<br>");
echo $hasilBagiPenugasan;
echo ("<br>");
echo $hasilSisaBagiPenugasan;
echo ("<br>");

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo $hasilIdentik;
echo ("<br>");
echo $hasilTidakIdentik;
echo ("<br>");

?>