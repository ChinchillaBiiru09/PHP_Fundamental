<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan1</title>
</head>
<body>
    <h1>Contoh For 1</h1>
    <table border="2" cellpadding="10" cellspacing="0">
        <?php 
            for ($i=1; $i < 3; $i++) { 
                echo "<tr>";
                for ($j=1; $j < 5; $j++) { 
                    echo "<td>$i,$j</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>

    <h1>Contoh For 2</h1>
    <table border="2" cellpadding="10" cellspacing="0">
        <?php for( $i = 1; $i < 4; $i++) { ?>
            <tr>
                <?php for( $j = 1; $j < 5; $j++) { ?>
                    <td><?php echo "$i,$j"; ?></td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>

    <h1>Contoh For 3</h1>
    <table border="2" cellpadding="10" cellspacing="0">
        <?php for( $i = 1; $i < 5; $i++) : ?>
            <tr>
                <?php for( $j = 1; $j < 5; $j++) : ?>
                    <td><?= "$i,$j"; ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>