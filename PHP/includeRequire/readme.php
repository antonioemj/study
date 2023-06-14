<?php


// o  require e include chamam o arquivo quantas vezes for necessario
// o require ou include once chamam apenas 1 vez independente de quantas vezes forem chamado
//require will produce a fatal error (E_COMPILE_ERROR) and stop the script
//include will only produce a warning (E_WARNING) and the script will continue


include "require.php";echo '</br>';
include "require.php";echo '</br>';
include "require.php";
echo '</br>';echo '</br>';echo '</br>';echo '</br>';

include_once "requireOnce.php";echo '</br>';
include_once "requireOnce.php";echo '</br>';
echo '</br>';echo '</br>';echo '</br>';echo '</br>';

require "include.php";echo '</br>';
require "include.php";echo '</br>';
require "include.php";echo '</br>';
echo '</br>';echo '</br>';echo '</br>';echo '</br>';


require_once "includeOnce.php";
require_once "includeOnce.php";
echo '</br>';echo '</br>';echo '</br>';echo '</br>';
