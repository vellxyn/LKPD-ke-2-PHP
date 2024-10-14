<?php


$bill1 = [80, 77 ,65, 89,55,12, 90, 86];
$bill2 = [77, 99, 55, 81, 45, 90, 91, 98];

$ada = array_intersect($bill1, $bill2);
echo "Bilangan yang ada di kedua variabel: " . implode(", ", $ada) . "<br>";

$diff1 = array_diff($bill1, $bill2);
$diff2 = array_diff($bill2, $bill1);
$diff = array_merge($diff1, $diff2);
echo "Bilangan yang tidak ada di kedua variabel: " . implode(", ", $diff) . "<br>";