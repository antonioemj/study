<?php

$valor = 2;

$some = fn($a, $b) => $a + $b * $valor;

echo $some(1, 2) . "</br>";




$somee = function($a, $b) use($valor) {
    return $a + $b * $valor;
};

echo $somee(1, 3) . "</br>";