<?php

require __DIR__ . '/vendor/autoload.php';

$app = new Slim\App;

//template
$container = $app->getContainer();

$container['view'] = function ($container) {
    $templates = __DIR__ . '/templates/';
    $cache = __DIR__ . '/tmp/views/';

    $view = new Slim\Views\Twig($templates, compact('cache'));

    return $view;
};




//route
$app->get('/', function ($request, $response) {
   	return $this->view->render($response, 'home.twig');
   	//return $this->view->render($response, 'home.twig');

});



//launcher
$app->run();
