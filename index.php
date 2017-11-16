<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
ini_set('display_errors','On');
ini_set('memory_limit', '2048M');


# === Session
session_cache_limiter(false);
@session_start();


#get the url base
function getBaseUrl() 
{
    // output: /myproject/index.php
    $currentPath = $_SERVER['PHP_SELF']; 
    
    // output: Array ( [dirname] => /myproject [basename] => index.php [extension] => php [filename] => index ) 
    $pathInfo = pathinfo($currentPath); 
    
    // output: localhost
    $hostName = $_SERVER['HTTP_HOST']; 
    
    // output: http://
    $protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,5))=='https://'?'https://':'http://';
    
    // return: http://localhost/myproject/
    return $protocol.$hostName.$pathInfo['dirname']."/";
}

//colocando o caminho para o projeto, server path

$urlBase = getBaseUrl();
define("_BASEURL", $urlBase);



require 'vendor/autoload.php';
$app = new \Slim\Slim(array(
  'debug' => true
));

require_once __DIR__ . '/bootstrap.php';

# === helpers
# ==================================================
require_once __DIR__ . '/helpers/appHelpers.php';

# === models
# ==================================================
require_once __DIR__ . "/models/appModels.php";

# === controllers
# ==================================================
require_once __DIR__ . "/controllers/appControllers.php";



$app->run ();


?>