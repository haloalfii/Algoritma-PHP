<?php
$nilai = [72, 65, 73, 78, 75, 74, 90, 81, 87, 65, 55, 69, 72, 78, 79, 91, 100, 40, 67, 77, 86];
echo "<h3>Soal Pertama</h3>";
echo "<br/>";
echo "Rata-rata = " . array_sum($nilai) / count($nilai);
echo "<br/>";
echo "Nilai tertinggi = " . max($nilai);
echo "<br/>";
echo "Nilai terendah = " . min($nilai);
