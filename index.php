<?php

if(!session_id())
{
    session_start();
}

require '../configs/configs.php';
require './vendor/autoload.php';

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use Source\Models\Page;

$c = new Slim\Container(SLIM_CONFIG);

$c['notFoundHandler'] = function ($c) {
    $page = new Page();
    $page->setTpl("error404",[
        
    ]);
    return function ($request, $response) use ($c) {
        return $response->withStatus(404);
    };
};



$app = new Slim\App($c);


//Routes website
require './routes/website_route.php';

$app->run();

?>