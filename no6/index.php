<?php


$siswa = [
  [
    'nama' => 'Andi',
    'nilai' => [80, 78, 82, 78, 88],
  ],
  [
    'nama' => 'Beni',
    'nilai' => [86, 70, 80, 85, 81],
  ],
  [
    'nama' => 'Dani',
    'nilai' => [83, 91, 70, 73, 81],
  ],
];


foreach ($siswa as $s) {
  $rata = array_sum($s['nilai']) / count($s['nilai']);
  echo "Nilai rata-rata {$s['nama']} adalah {$rata} <br>";
}
