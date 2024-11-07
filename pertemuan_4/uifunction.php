<?php

function greeting($prefix = "Master", $name = "Kira") {
    return "Welcome, $prefix $name!";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UI Function</title>
</head>
<body>
    <h1><?= greeting("Mrs.", "Akira"); ?></h1>
</body>
</html>