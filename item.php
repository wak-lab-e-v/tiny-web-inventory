<?php

require 'config.php';

// get item id from HTTP_GET request
$iID = $_GET['id'];

// syntax check, only 5 digits allowed
if ( !preg_match_all("/^([0-9]{5})*$/i", $iID) ) {
    echo $tpl->render('error', ['error' => 'ID SYNTAX CHECK ERROR'] ); 
    die();
}

// check for config iID.json
if ( !file_exists(ITEMS_PATH.$iID.".json") ) {
    echo $tpl->render('error', ['error' => 'ITEM NOT FOUND'] );
    die('');
}

$tpl->addData(['ITEM_ID' => $iID]);

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






