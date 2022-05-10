<?php

const ITEMS_PATH = __DIR__."items/";
const DEBUG_ENABLED = false;


// basic checks


// debug output

if ( DEBUG_ENABLED ) then {

    ini_set('display_errors', 1);
    error_reporting(E_ALL);

}
