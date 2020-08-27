<?php


use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use Source\Models\Page;
use Source\Sql\Models\Projeto;
use Source\Sql\Models\Blog;
use Source\Sql\Models\Content;
use Source\Sql\Sql;

$app->get('/', function (Request $request, Response $response, array $args) use ($app) {
    
    $page = new Page();
    $page->setTpl("index",[
    ]);
    
    
});

$app->get('/projeto/ilustranext', function (Request $request, Response $response, array $args) use ($app) {

    $page = new Page();
    $page->setTpl("ilustranext",[
    ]);
    
});
$app->get('/projeto/configurator', function (Request $request, Response $response, array $args) use ($app) {

    $page = new Page();
    $page->setTpl("configurator",[
    ]);
    
});



?>