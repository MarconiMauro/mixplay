<?php
// DIC configuration

$container = $app->getContainer();

// view renderer
$container['renderer'] = function ($c) {
    $settings = $c->get('settings')['renderer'];
    return new Slim\Views\PhpRenderer($settings['template_path']);
};

// monolog
$container['logger'] = function ($c) {
    $settings = $c->get('settings')['logger'];
    $logger = new Monolog\Logger($settings['name']);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());
    $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['path'], $settings['level']));
    return $logger;
};


$container['db'] = function () {
    return  new PDO ('mysql:host=127.0.0.1;dbname=mixplay-api; charset=UTF8', 'root','', [
        PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION
        ]);
};


$container['MoviesController'] = function($container) {
    return new \Controller\MoviesController($container);

};

$container['PlansController'] = function($c) {
    return new \Controller\PlansController();
};


