<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 2</title>
</head>

<body>
    <h3>Soal Nomor 2</h3>
    <br />
    <form action="<?php $PHP_SELF ?>" method="post">
        Kata :
        <input type="text" name="search">
        <button type="submit" name="submit">Hitung</button>
    </form>
</body>

</html>

<?php
if (isset($_POST['submit'])) {
    $kata = $_POST['search'];
    echo "<br>";

    $kata_arr = str_split($kata);
    $lowercase = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];

    $found = array_intersect($lowercase, $kata_arr);
    $count = array_count_values($kata_arr);

    $result = [];

    foreach ($found as $item) {
        $result[$item] = $count[$item];
    }

    $total = array_sum($result);
    echo "Kata -" . $kata . "- mengandung " . $total . " huruf kecil";
}
?>