<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulasi String</title>
    <style>
        body {
            background-color: black;
            color: white;
        }
    </style>
</head>

<body>
    <?php
    // Penggabungan String (Concatenation)
    $namaDepan = 'Daffa';
    $namaBelakang = 'Fikri';

    // Cara Pertama operator titik ( . )
    $namaLengkap = $namaDepan . ' ' . $namaBelakang;

    // Cara kedua pakai interpolasi string
    $fullName = "$namaDepan $namaBelakang";

    // Pencarian string
    $kalimat = "Belajar PHP bahasa pemrograman PHP";
    $posisi = strpos($kalimat, "PHP");
    $posisiAkhir = strrpos($kalimat, "PHP");

    // Fungsi lain string
    $kalimatBaru = str_replace("PHP", "Javascript", $kalimat);

    // Panjang string
    $panjangKalimat = strlen($kalimat);

    // Uppercase (huruf besar semua)
    $upperKalimat = strtoupper($kalimat);

    // Lowercase (huruf kecil semua)
    $lowerKalimat = strtolower($kalimat);

    // substr
    $subKalimat = substr($kalimat, 0, 15);
    ?>

    <h3><?= $namaLengkap; ?></h3>
    <h3><?= $fullName; ?></h3>
    <h3><?= $posisi; ?></h3>
    <h3><?= $posisiAkhir; ?></h3>
    <h3><?= $kalimatBaru; ?></h3>
    <h3><?= $panjangKalimat; ?></h3>
    <h3><?= $upperKalimat; ?></h3>
    <h3><?= $lowerKalimat; ?></h3>
    <h3><?= $subKalimat; ?></h3>
</body>

</html>