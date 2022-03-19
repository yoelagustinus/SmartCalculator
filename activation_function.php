<?php
$sigma = -0.48229616464;
echo sigmoid($sigma);
echo "<br>";
$tanh = -0.1137841554;
echo tanh($tanh);

function sigmoid($t){
    return 1 / (1 + exp(-$t));
}