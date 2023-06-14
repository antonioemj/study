<?php

$a = 50;

function somarr(&$numeroA, int $numeroB = 10)
{
    $numeroA += $numeroB;
    echo $numeroA . "<br/>";
}

somarr($a, 2);

somarr($a, 10);


/*
somarrr( numeroB: 30, numeroA: $a);

echo "Agora fora da Função: $a";    
*/

function ex(int $aa, int $bb){
    $resultado = $aa * $bb;
    echo $resultado;
}

ex(2,2);

