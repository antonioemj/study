<?php


function fila()
{

    yield "Anthony" . " </br> ";
    yield "Djalma". " </br> ";
    yield "Glaucio". " </br> ";
    yield "João". " </br> ";
    yield "Ronaldo". " </br> ";

}


$filaa = fila();

var_dump($filaa->current());
var_dump($filaa->next());
var_dump($filaa->current());
var_dump($filaa->next());
var_dump($filaa->current());
var_dump($filaa->next());
var_dump($filaa->current());
var_dump($filaa->next());
var_dump($filaa->current());
var_dump($filaa->next());
var_dump($filaa->current());
