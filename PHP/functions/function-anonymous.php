<?php

$empresa = function($site, $tel)
{
    return "https://$site<br/>Tel: $tel";
};

function so($a, $b, $callback)
{

    $callback($a + $b);

}

$fn = function($resultado) use ($empresa) {

    echo $empresa("goog", "31-33");

    var_dump($resultado);

};

so(2, 3, $fn);
so(5, 5, $fn);