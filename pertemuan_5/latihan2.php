<?php
// Menampilkan multiple array dengan 
// for atau foreach
// - contoh array multiple (tipe numerik / array dengan key-nya adalah index atau angka)
$students = [
    ["Ren", "12345", "ren@mail.com", "Kyoto", "Japan"],
    ["Akira", "67890", "akira@mail.com", "Tokyo", "Japan"]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
</head>
<body>

    <h1>Studens List</h1>

    <?php foreach( $students as $student ) : ?>
        <ul>
            <li> Name         : <?= $student[0]; ?></li>
            <li> No. Identity : <?= $student[1]; ?></li>
            <li> Email        : <?= $student[2]; ?></li>
            <li> City         : <?= $student[3]; ?></li>
            <li> Country      : <?= $student[4]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>
</html>