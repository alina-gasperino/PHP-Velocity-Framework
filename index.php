<?php

use Questblue\Router\Router\Router;
use Questblue\Router\Router\ControllerFactory;

require_once __DIR__.'/vendor/autoload.php';

if(isset($argv)){
    $options = getopt('', ['uri::']);

    $url = $options['uri'];
}else{
    $url = $_SERVER['REQUEST_URI'];
}

$controllerFactory = new ControllerFactory('/src/');

$router = new Router($controllerFactory);
$router->setDefaultRoute('Home', 'index');
$router->setNotFoundRoute('ErrorPages', 'notFound');

$router->setup($url);
$router->execute($url);
$router->executeView();
