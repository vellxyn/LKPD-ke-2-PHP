<?php

$usia = [12, 60, 56, 11, 21, 7];
$dewasa = 0;
$anak = 0;

foreach ($usia as $age) { $age > 17 ? $dewasa++ : $anak++; }

echo "Dewasa = $dewasa";
echo "<br>";
echo "Anak = $anak";