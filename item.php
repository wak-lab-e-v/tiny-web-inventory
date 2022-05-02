<?php
// debug only:
// ini_set('display_errors', 1);
// error_reporting(E_ALL);

// Create new Plates instance
require __DIR__.'/plates/src/Engine.php';
require __DIR__.'/plates/src/Template/Directory.php';
require __DIR__.'/plates/src/Template/FileExtension.php';
require __DIR__.'/plates/src/Template/Folders.php';
require __DIR__.'/plates/src/Template/Functions.php';
require __DIR__.'/plates/src/Template/Data.php';
require __DIR__.'/plates/src/Template/Template.php';
require __DIR__.'/plates/src/Template/Name.php';
require __DIR__.'/plates/src/Template/Func.php';
require __DIR__.'/plates/src/Template/Folder.php';

$tpl = new League\Plates\Engine(__DIR__.'/views','tpl');

// get item id from HTTP_GET request
$iID = $_GET['id'];

// syntax check, only 6 digits allowed
if ( !preg_match_all("/^([0-9]{6})*$/i", $iID) ) {
    echo $tpl->render('error', ['error' => 'SYNTAX CHECK ERROR'] ); 
    die();
}

// check for config iID.json
if ( !file_exists("items/".$iID.".json") ) {
    echo $tpl->render('error', ['error' => 'ITEM NOT FOUND'] );
    die('');
}

// read json
$jString = file_get_contents("items/".$iID.".json");
$itemJson = json_decode($jString, true);


// check protection/password request
// check password send
//pwd = $_GET['pwd'];
//pwd_md5 = md5(pwd);

// show data
echo $tpl->render('item', $itemJson );

// debug:
// print_r( $itemJson );
?>






