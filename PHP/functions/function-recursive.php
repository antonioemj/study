<?php

function recursivo($a)
{

    if ($a < 10) {
        echo $a . " ";
        recursivo(++$a);
    }

}

recursivo(5);