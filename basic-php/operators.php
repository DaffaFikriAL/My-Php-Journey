<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator - operator PHP</title>
    <style>
        body {
            background-color: black;
            color: white;
        }
    </style>
</head>

<body>

    <!-- Operator ARITMATIKA -->
    <?php
    /*
    Operator Aritmatika:

    + tambah
    - kurang
    x kali
    / bagi
    % modulus (sisa)
    ** eksponensial

    */

    echo 'Operator Aritmatika : ';
    $a = 500;
    $b = 100;
    ?>

    <ul>
        <li>Penjumlahan = <?= $a + $b; ?></li>
        <li>Pengurangan = <?= $a - $b; ?></li>
        <li>Perkalian = <?= $a * $b; ?></li>
        <li>Pembagian = <?= $a / $b; ?></li>
        <li>Sisa bagi = <?= $a % $b; ?></li>
        <li>Pangkat = <?= $a ** $b; ?></li>
    </ul>



    <!-- Operator PERBANDINGAN -->
    <?php

    /*
    Operator Perbandingan:

    == sama dengan
    != tidak sama dengan
    === identik
    !== tidak identik
    > lebih besar dari/lebih dari
    < lebih kecil dari/kurang dari
    >= lebih besar sama dengan
    <= lebih kecil sama dengan

    */

    echo "<br>";
    echo 'Operator Perbandingan : ';
    $a = 50;
    $b = 100;
    ?>

    <ul>
        <li>Operator sama dengan = <?= var_dump($a == $b); ?></li>
        <li>Operator tidak sama dengan = <?= var_dump($a != $b); ?></li>
        <li>Operator identik = <?= var_dump($a === $b); ?></li>
        <li>Operator tidak identik = <?= var_dump($a !== $b); ?></li>
        <li>Operator lebih dari = <?= var_dump($a > $b); ?></li>
        <li>Operator kurang dari = <?= var_dump($a < $b); ?></li>
        <li>Operator lebih besar sama dengan = <?= var_dump($a >= $b); ?></li>
        <li>Operator lebih kecil sama dengan = <?= var_dump($a <= $b); ?></li>
    </ul>




    <!-- Operator LOGIKA -->
    <?php
    /*
    Operator Logika:

    && AND
    || OR
    ! not
    xor XOR

    */

    echo "<br>";
    echo 'Operator Logika : ';
    $a = true;
    $b = false;
    ?>

    <ul>
        <li>Operator AND = <?= var_dump($a && $b); ?></li>
        <li>Operator OR = <?= var_dump($a || $b); ?></li>
        <li>Operator NOT = <?= var_dump(!$a); ?></li>
        <li>Operator XOR = <?= var_dump($a xor $b); ?></li>
    </ul>
</body>

</html>