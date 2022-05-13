<?php

define('SITE_NAME', 'WAK-Lab Inventar');
define('SITE_INVENTARY_URL','https://inventory.wak-lab.org/');
define('ITEMS_PATH', __DIR__.'/items/');

// for security reasons, you should move this path outside of your htdocs folder
define('IMPORT_PATH',__DIR__.'/include'); 

define('DEBUG_ENABLED', false);



// debug output
if ( DEBUG_ENABLED ) {

    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    echo 'ITEMS_PATH: '.ITEMS_PATH;
}


// Create new Plates instance
require IMPORT_PATH . '/plates/src/Engine.php';
require IMPORT_PATH . '/plates/src/Template/Directory.php';
require IMPORT_PATH . '/plates/src/Template/FileExtension.php';
require IMPORT_PATH . '/plates/src/Template/Folders.php';
require IMPORT_PATH . '/plates/src/Template/Functions.php';
require IMPORT_PATH . '/plates/src/Template/Data.php';
require IMPORT_PATH . '/plates/src/Template/Template.php';
require IMPORT_PATH . '/plates/src/Template/Name.php';
require IMPORT_PATH . '/plates/src/Template/Func.php';
require IMPORT_PATH . '/plates/src/Template/Folder.php';

$tpl = new League\Plates\Engine(__DIR__.'/views','tpl');
$tpl->addData(['SITE_NAME' => SITE_NAME]);


// basic checks






