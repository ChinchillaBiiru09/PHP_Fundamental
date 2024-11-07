<?php
// Menampilkan array dengan 
// for atau foreach
$bango = [18, 10, 2001, 9, 3, 20, 777, 123];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
    <style>
        .box {
            width: 50px;
            height: 50px;
            background-color: pink;
            border: 2px solid salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }

        .clear {
            clear: both;
        }
    </style>
</head>
<body>
    <!-- contoh forloop -->
    <?php for($i=0; $i<count($bango); $i++) { ?>
        <div class="box"><?php echo $bango[$i]; ?></div>
    <?php } ?>

    <div class="clear"></div> <!-- iar box div nya turun, gak menyamping terus -->

    <!-- contoh foreach -->
    <?php foreach( $bango as $b ) { ?>
        <div class="box"><?php echo $b; ?></div>
    <?php } ?>

    <div class="clear"></div>

    <?php foreach( $bango as $b ) : ?>
        <div class="box"><?= $b; ?></div>
    <?php endforeach; ?>

</body>
</html>