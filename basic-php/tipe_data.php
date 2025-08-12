<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipe Data</title>
</head>

<body>
    <?php
    // Tipe - tipe Data

    $string = 'halo gaes!'; //String teks
    $num = 100; // Integer bilangan bulat
    $float = 5.25;  // Float atau Double bilangan desimal
    $boolean = true;    // Boolean true (1/benar) atau false (0/salah)
    $arr = ['a', 'b', 100, false];    // array menyimpan beberapa nilai dalam satu variabel
    $var = null;    // menyimpan variabel tanpa nilai
    ?>

    <!-- Mengecek tipe data -->
    <h3><?php
        echo $string;
        ?></h3>

    <h3><?php
        echo gettype($var); //gettype(): mengembalikan tipe data dari variabel.
        ?></h3>

    <h3><?php
        var_dump($arr); //var_dump(): menampilkan tipe data dan nilai dari variabel.
        ?></h3>

    <h3><?php
        echo is_bool($boolean); //is_*(): mengecek tipe data tertentu.
        ?></h3>
</body>

</html>