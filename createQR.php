<?php

ob_start("callback");

require('config.php');
include('include/phpqrcode/qrlib.php');

    $iID = $_GET['id']; // remember to sanitize that - it is user input!
        
    // syntax check, only 5 digits allowed
    if ( !preg_match_all("/^([0-9]{5})*$/i", $iID) ) {
        echo $tpl->render('error', ['error' => 'ID SYNTAX CHECK ERROR'] ); 
        die();
    }

    $codeText = SITE_INVENTARY_URL.$iID;

    // $debugLog = ob_get_contents();
    ob_end_clean();

    // outputs image directly into browser, as PNG stream
    QRcode::png($codeText, $filename = false, $dotSize = 4, $pixelSize = 3, $frameSize = 2);


?>