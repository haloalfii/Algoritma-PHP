<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 3</title>
</head>

<body>
    <h3>Soal Nomor 3</h3>
    <br />
    <form action="<?php $PHP_SELF ?>" method="post">
        Kalimat :
        <input type="text" name="text">
        <button type="submit" name="submit">Tampilkan</button>
    </form>
</body>

</html>

<?php
if (isset($_POST['submit'])) {
    function generateUBT($input)
    {
        $arr_input = explode(' ', $input);

        // unigram
        $unigram = '';
        foreach ($arr_input as $item) {
            $unigram .= $item . ', ';
        }
        $unigram = substr($unigram, 0, -2);

        // bigram
        $x = 0;
        $bigram = '';
        foreach ($arr_input as $item) {
            if ($x < 1) {
                $bigram .= $item . ' ';
                $x++;
            } else {
                $bigram .= $item . ', ';
                $x = 0;
            }
        }
        $bigram = substr($bigram, 0, -2);

        // trigram
        $y = 0;
        $trigram = '';
        foreach ($arr_input as $item) {
            if ($y < 2) {
                $trigram .= $item . ' ';
                $y++;
            } else {
                $trigram .= $item . ', ';
                $y = 0;
            }
        }
        $trigram = substr($trigram, 0, -2);


        $result = 'Unigram : ' . $unigram . '<br>';
        $result .= 'Bigram : ' . $bigram . '<br>';
        $result .= 'Trigram : ' . $trigram;

        return $result;
    }

    echo generateUBT($_POST['text']);
}
