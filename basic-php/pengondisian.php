<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengondisian</title>
    <style>
        body {
            background-color: black;
            color: white;
        }
    </style>
</head>

<body>
    <!-- If Else Statements -->
    <?php
    $nilai = 98;

    if ($nilai >= 95) {
    ?>
        <h3>Nilai A</h3>
    <?php
    } elseif ($nilai >= 75) {
    ?>
        <h3>Nilai B</h3>
    <?php
    } else {
    ?>
        <h3>Remidi!</h3>
    <?php
    }
    ?>


    <!-- Switch Case Statements -->
    <?php
    $game = 'Mobile Legends';

    switch ($game) {
        case 'Mobile Legends':
            echo 'Game favorit anda adalah Mobile Legends';
            break;

        case 'CODM':
            echo 'Game favorit anda adalah CODM';
            break;

        default:
            echo 'Game favorit anda tidak diketahui';
    }
    ?>
</body>

</html>