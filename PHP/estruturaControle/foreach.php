<?php

$aereas = ["Gol", "Latam", "Azul"];

foreach ($aereas as $valor) {

    var_dump(strlen($valor));

}

//foreach ($_SERVER as $valor){
//    var_dump($valor);
//}


$array = [
    1 => 'Domingo',
    'Segunda',
    'Terça',
    'Quarta',
    'Quinta',
    'Sexta',
    'Sábado'
];

foreach ($array as $valor) {
    echo "$valor <br>";
}