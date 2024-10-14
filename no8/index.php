<?php

$data = [80, 90, 75, 100, 85, 100, 66];
$cari = 100;

echo "Jumlah angka $cari : " . array_count_values($data)[$cari];