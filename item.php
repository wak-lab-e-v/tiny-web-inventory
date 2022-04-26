<?php

require 'Mustache/Autoloader.php';
Mustache_Autoloader::register();
$m = new Mustache_Engine(array(
    'template_class_prefix' => '__MyTemplates_',
    'cache_lambda_templates' => false,
    'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__).'/views'),
    'partials_loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__).'/views/partials'),
    'helpers' => array('i18n' => function($text) {
        // do something translatey here...
    }),
    'escape' => function($value) {
        return htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
    },
    'charset' => 'ISO-8859-1',
    'logger' => new Mustache_Logger_StreamLogger('php://stderr'),
    'strict_callables' => true,
    'pragmas' => [Mustache_Engine::PRAGMA_FILTERS],
));

// get item id from HTTP_GET request
$iID = $_GET['id'];

// syntax check, only 6 digits allowed
if ( !preg_match_all("/^([0-9]{6})*$/i", $iID) ) {
    $tpl = $m->loadTemplate('error');
    die($tpl->render(array('errorMsg' => 'ITEM ID - SYNTAX CHECK FAILED')));
}

// check for config iID.json
if ( !file_exists("items/".$iID.".json") ) {
    $tpl = $m->loadTemplate('error');
    die($tpl->render(array('errorMsg' => 'ITEM NOT FOUND')));
}

// read json
$jString = file_get_contents("items/".$iID.".json");
$itemJson = json_decode($jString, true);


// check protection/password request
// check password send
//pwd = $_GET['pwd'];
//pwd_md5 = md5(pwd);

// show data
$tpl = $m->loadTemplate('showItem');
echo $tpl->render($itemJson)

?>






