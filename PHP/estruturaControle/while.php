<?php

$x = 11;

while ((int)date("s") % 2 === 0) {

    $x++;

}

var_dump($x);


const VALOR_LIMITE = 6;
$contador = 0;

while($contador < VALOR_LIMITE) {
    echo "while $contador <br>";
    $contador++;
}