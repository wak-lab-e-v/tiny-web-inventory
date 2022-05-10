<?php

define('SITE_NAME', 'WAK-Lab Inventar');
define('SITE_INVENTARY_URL','https://inventory.wak-lab.org/');
define('ITEMS_PATH', __DIR__.'/items/');
define('DEBUG_ENABLED', false);



// debug output
if ( DEBUG_ENABLED ) {

    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    echo 'ITEMS_PATH: '.ITEMS_PATH;
}


// Create new Plates instance
require __DIR__.'/include/plates/src/Engine.php';
require __DIR__.'/include/plates/src/Template/Directory.php';
require __DIR__.'/include/plates/src/Template/FileExtension.php';
require __DIR__.'/include/plates/src/Template/Folders.php';
require __DIR__.'/include/plates/src/Template/Functions.php';
require __DIR__.'/include/plates/src/Template/Data.php';
require __DIR__.'/include/plates/src/Template/Template.php';
require __DIR__.'/include/plates/src/Template/Name.php';
require __DIR__.'/include/plates/src/Template/Func.php';
require __DIR__.'/include/plates/src/Template/Folder.php';

$tpl = new League\Plates\Engine(__DIR__.'/views','tpl');
$tpl->addData(['SITE_NAME' => SITE_NAME]);


// basic checks






