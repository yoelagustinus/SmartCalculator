<?php

$price=[7325,7400,7450,
7475,
7650,
7600,
7700,
7700,
7700,
7850,
7750,
7675,
7675,
7775,
7950];

$len_input = count($price);

$m_a = 0;
$arr_ma = [];

for($i=2; $i<$len_input; $i++){
    $y_1 = $i-1;
    $y_2 = $i-2;
    
    $t_1 = $price[$y_1];
    $t_2 = $price[$y_2];
    $m_a = ($t_1 + $t_2)/2;

    $ma_cari = $i+1;

    echo "$\MA2_{{$ma_cari}}$ = (\$Day_{{$y_1}}$ + \$Day_{{$y_2}}$)/2 <br>";
    echo "$\MA2_{{$ma_cari}}$ = (". $t_1 . " + ". $t_2 . ")/2 <br>";
    echo "$\MA2_{{$ma_cari}}$ = $m_a <br>";

    array_push($arr_ma, $m_a);
    echo "=======================<br>";
}

$len_arr_ma = count($arr_ma);
for($j=0;$j<$len_arr_ma; $j++){
    echo $arr_ma[$j] . ", ";
}
