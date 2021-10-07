<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 4</title>
</head>

<body>
    <table>
        <?php
        $hitam = [1, 2, 5, 7, 10, 11, 13, 14, 17, 19, 22, 23, 25, 26, 29, 31, 34, 35, 37, 38, 41, 43, 46, 47, 49, 50, 53, 55, 58, 59, 61, 62];
        for ($x = 0; $x <= 7; $x++) {
        ?>
            <tr>
                <?php
                for ($a = 1; $a <= 8; $a++) {
                    $number = $a + (8 * $x);
                    if (array_search($number, $hitam) || $number == 1) {
                ?>
                        <td style="background-color: black; color: white;"><?= $a + (8 * $x) ?></td>
                    <?php
                    } else {
                    ?>
                        <td><?= $a + (8 * $x) ?></td>
                <?php
                    }
                }
                ?>
            </tr>

        <?php
        }
        ?>
    </table>
</body>

</html>