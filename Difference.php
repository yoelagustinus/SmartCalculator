<?php

$price=[7325,7400,7362.5, 7425, 7462.5, 7562.5, 7625, 7650, 7700, 7700, 7775, 7800, 7712.5, 7675, 7725];

$len_input = count($price);

$m_a = 0;

for($i=1; $i<$len_input; $i++){
    $y_1 = $i;
    $y_2 = $i-1;
    
    $t_pas = $price[$y_1];
    $t_min_1 = $price[$y_2];
    $diff = ($t_pas - $t_min_1);

    $t = $i+1;

    echo "\$ Df_{{$t}} = y_{{$t}} + y_{{$y_1}} \$ <br>";
    echo "\$ Df_{{$t}} = ". $t_pas . " - ". $t_min_1 . " \$ <br>";
    echo "\$ Df_{{$t}} = $diff \$ <br>";

    echo "=======================<br>";
}