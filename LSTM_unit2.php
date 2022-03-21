<?php

    //codingan termasuk akal untuk hitung manual nanti
    $X_t = [0.2,0.24,0.52,0.44,0.6,0.6,0.6,0.84,0.68,0.56,0.56,0.72];
    $weight_f = -0.086234;
    $weight_i = -0.237363;
    $weight_z = 0.2134627;
    $weight_o = 0.035626;

    $len_input = count($X_t);  

    $sum = 0;
    $H_min = 0;
    $C_min = 0;
    $weightf_x_Xt = 0;
    $weighti_x_Xt = 0;
    $weightz_x_Xt = 0;
    $weighto_x_Xt = 0;

    //parameter
    $units = 2;

    function sigmoid($t){
        return 1 / (1 + exp(-$t));
    }

    for($j=0;$j<$len_input;$j++){
        $weightf_x_Xt += $weight_f * $X_t[$j];
        $weighti_x_Xt += $weight_i * $X_t[$j];
        $weightz_x_Xt += $weight_z * $X_t[$j];
        $weighto_x_Xt += $weight_o * $X_t[$j];
    }

    for($i=0;$i<$units;$i++){

        echo "W_f * X_t = " . $weightf_x_Xt . "<br>";
        echo "W_i * X_t = " . $weighti_x_Xt . "<br>";
        echo "W_z * X_t = " . $weightz_x_Xt . "<br>";
        echo "W_o * X_t = " . $weighto_x_Xt . "<br><br>";

        $F_t = sigmoid(($weight_f * $H_min) + $weightf_x_Xt);
        $I_t = sigmoid(($weight_i * $H_min) + $weighti_x_Xt);
        $Z_t = tanh(($weight_z * $H_min) + $weightz_x_Xt);
        $C_t = ($F_t*$C_min) + ($Z_t*$I_t);
        $O_t = sigmoid(($weight_o * $H_min) + $weighto_x_Xt);
        $H_t = $O_t * tanh($C_t);
       
        $unit= $i+1;
        echo "F_$unit = " . " \sigma(($weight_f * $H_min) + $weightf_x_Xt) " ."<br>";
        echo "F_$unit = " . " \sigma(" . ($weight_f * $H_min) + $weightf_x_Xt . ")" . "<br>";
        echo "F_$unit = " . $F_t . "<br>";
        echo "<br>";
        echo "I_$unit = " . " \sigma(($weight_i * $H_min) + $weighti_x_Xt) " ."<br>";
        echo "I_$unit = " . " \sigma(" . ($weight_i * $H_min) + $weighti_x_Xt . ")" . "<br>";
        echo "I_$unit = " . $I_t . "<br>";
        echo "<br>";
        echo "Z_$unit = " . " tanh(($weight_z * $H_min) + $weightz_x_Xt) " ."<br>";
        echo "Z_$unit = " . " tanh(" . ($weight_z * $H_min) + $weightz_x_Xt . ")" . "<br>";
        echo "Z_$unit = " . $Z_t . "<br>";
        echo "<br>";
        echo "C_$unit = " . " ($F_t*$C_min) + ($Z_t*$I_t)" . "<br>";
        echo "C_$unit = " . $C_t . "<br>";
        echo "<br>";
        echo "O_$unit = " . " \sigma(($weight_o * $H_min) + $weighto_x_Xt) " ."<br>";
        echo "O_$unit = " . " \sigma(" . ($weight_o * $H_min) + $weighto_x_Xt . ")" . "<br>";
        echo "O_$unit = " . $O_t . "<br>";
        echo "<br>";
        echo "H_$unit = " . " $O_t * tanh($C_t) " ."<br>";
        echo "H_$unit = " . " = $O_t * ". tanh($C_t) ."<br>";
        echo "H_$unit = " . $H_t . "<br>";
        echo "=====================================<br>";

        $C_min = $C_t;
        $H_min = $H_t;
        
    }