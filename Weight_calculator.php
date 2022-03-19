<?php
$input = [0,0.12,0.2,0.24,0.52,0.44,0.6,0.6,0.6,0.84,0.68,0.56];
$weight = -0.086234;


$len_input = count($input);
$sum = 0;

for($i=0;$i<$len_input;$i++){
    $sum += $input[$i] * $weight;
}

echo "Hasilnya: " . $sum;