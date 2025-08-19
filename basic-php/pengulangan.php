<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengulangan (Looping)</title>
    <style>
        body {
            background-color: black;
            color: white;
        }
    </style>
</head>

<body>
    <!-- While Loop -->
    <h3>While Loop</h3>
    <?php
    $i = 1;
    while ($i <= 5) {
        echo "Nomor : $i <br>";
        $i++;
    }
    ?>

    <br>

    <!-- Do While Loop -->
    <h3>Do While Loop</h3>
    <?php
    $j = 1;
    do {
        echo "Nomor : $j <br>";
        $j++;
    } while ($j <= 5);
    ?>

    <br>

    <!-- For Loop -->
    <h3>For Loop</h3>
    <?php
    for ($k = 1; $k <= 5; $k++) {
        echo "Nomor : $k <br>";
    }
    ?>

    <br>

    <!-- Break dan Continue -->
    <h3>Break dan Continue</h3>
    <?php
    for ($k = 1; $k <= 5; $k++) {
        if ($k == 3) {
            continue;
        } else if ($k == 5) {
            break;
        }
        echo "Nomor : $k <br>";
    }
    ?>

    <br>

    <!-- For Each Loop -->
    <h3>For Each Loop</h3>
    <?php
    $arr = ['anggur', 'apel', 'jambu'];
    foreach ($arr as $buah) {
        echo "buah : $buah <br>";
    }
    ?>
</body>

</html>