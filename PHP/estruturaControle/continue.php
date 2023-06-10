<?php

for (
    $contador = 0;
    $contador <= 100;
    $contador++
) {
    if($contador >= 80&& $contador <= 90){
        continue;
    }
    echo $contador." ";
}
