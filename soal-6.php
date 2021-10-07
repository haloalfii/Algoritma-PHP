<?php
$arr = [
    ['f', 'g', 'h', 'i'],
    ['j', 'k', 'p', 'q'],
    ['r', 's', 't', 'u']
];

$cari = 'fghi';
$cari_split = str_split($cari);

// echo $cari_split[0];
$max = strlen($cari);

// echo array_search($cari_split[0], array_column($arr, 0));

for ($x = 0; $x < 4; $x++) {
    for ($y = 0; $y < $max; $y++) {
        if (array_search($cari_split[$y], array_column($arr, $x)) == NULL) {
            echo array_search($cari_split[$y], array_column($arr, $x));
            echo "<br>";
        }
        // else {
        //     echo array_search($cari_split[$x], array_column($arr, $y));
        // }
    }
}

// if (array_search('s', array_column($arr, 1)) == NULL) {
//     echo "ga ada";
// } else {
//     echo array_search('s', array_column($arr, 1));
// }
