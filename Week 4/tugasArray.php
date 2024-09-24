<?php
$daftarNilai = [
    'Alice' => 85,
    'Bob' => 92,
    'Charlie' => 78,
    'David' => 64,
    'Eva' => 90,
];

$totalNilai = 0;
$jumlahSiswa = 0;

foreach ($daftarNilai as $nilai) {
    $totalNilai += $nilai; 
    $jumlahSiswa++;        
}

$rataRata = $totalNilai / $jumlahSiswa;

echo "Daftar nilai siswa yang mencapai nilai di atas rata-rata ($rataRata) : <br>";
foreach ($daftarNilai as $nama => $nilai) {
    if ($nilai > $rataRata) {
        echo "Nama: $nama, Nilai: $nilai <br>";
    }
}
?>
