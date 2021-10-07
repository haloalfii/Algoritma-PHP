<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 5</title>
</head>

<body>
    <h3>Soal Nomor 5</h3>
    <br />
    <form action="<?php $PHP_SELF ?>" method="post">
        Kalimat :
        <input type="text" name="text">
        <button type="submit" name="submit">Tampilkan</button>
    </form>
</body>

<?php
$huruf = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];

if (isset($_POST['text'])) {
    $text = $_POST['text'];
    $data = str_split($text);

    $max = strlen($text);

    echo "Enkripsi = ";
    for ($x = 0; $x < $max; $x++) {
        if ($x % 2 == 0) {
            // echo $data[$x];
            $exc = array_search($data[$x], $huruf);
            echo $huruf[$exc + 1 + $x];
        } else {
            // echo $data[$x];
            $exc = array_search($data[$x], $huruf);
            echo $huruf[$exc - 1 - $x];
        }
    }
}

?>