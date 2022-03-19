<?php

    
    $X_t = [0,0.12,0.2,0.24,0.52,0.44,0.6,0.6,0.6,0.84,0.68,0.56];
    $weight_f = -0.086234;
    $weight_i = -0.237363;
    $weight_z = 0.2134627;
    $weight_o = 0.035626;

    $len_input = count($X_t);
    $sum = 0;
    $H_min = 0;
    $C_min = 0;


    for($i=0;$i<$len_input;$i++){
        
        $F_t = sigmoid(($weight_f * $H_min) + ($weight_f * $X_t[$i]));
        $I_t = sigmoid(($weight_i * $H_min) + ($weight_i * $X_t[$i]));
        $Z_t = tanh(($weight_z * $H_min) + ($weight_z * $X_t[$i]));
        $O_t = sigmoid(($weight_o * $H_min) + ($weight_o * $X_t[$i]));
        $C_t = ($F_t*$C_min) + ($Z_t*$I_t);
        $H_t = $O_t * tanh($C_t);
        
        $C_min = $C_t;
        $H_min = $H_t;
        
        echo "X_$i : " . $X_t[$i] . "<br>";
        echo "F_$i : " . $F_t . "<br>";
        echo "I_$i : " . $I_t . "<br>";
        echo "Z_$i : " . $Z_t . "<br>";
        echo "O_$i : " . $O_t . "<br>";
        echo "C_$i : " . $C_t . "<br>";
        echo "H_$i : " . $H_t . "<br>";
        echo "-===================================<br>";
        
    }

    function sigmoid($t){
        return 1 / (1 + exp(-$t));
    }