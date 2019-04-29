<?php


//Front Controller



//General settings
ini_set('display_errors', 1);
error_reporting(E_ALL);


//File connection
define('ROOT', dirname(__FILE__));
//echo ROOT.'<br>';
require_once(ROOT.'/components/Router.php');

//Database connection settings



//Router calling
$router = new Router();
$router->run();

echo '<pre>';
//var_dump($router);
