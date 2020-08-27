<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use Source\Models\Page;
use Source\Sql\Sql;

$app->get('/api/vagas', function (Request $request, Response $response, array $args) use ($app) {

    
    $result = [];


    $response->getBody()->write(json_encode($result));
    return $response
          ->withHeader('Content-Type', 'application/json')
          ->withStatus(201);
    
});

$app->get('/api/section', function (Request $request, Response $response, array $args) use ($app) {

    $sql = new Sql();

    $prev = $sql->select("SELECT * FROM pageTemplate WHERE id = :id",[
        ":id"=>$_GET["id"]
    ]);
    $prevVarTemplate = $sql->select("SELECT * FROM contentTemplate WHERE id_section = :id_section",[
        ":id_section"=>$_GET["id"]
    ]);
    
    $varTemplate = array();
    $vueVarTemplate = array();

    foreach($prevVarTemplate as $p)
    {
        //array_push($varTemplate,[
        //    $p["name"]=>$p["type"]
        //]);
        $varTemplate[$p["name"]] = $p["name"];
        $vueVarTemplate[$p["name"]] = '<input type="text" class=admInput v-model=' . $p["name"] . '>';
        //array_push($vueVarTemplate,[
        //    $p["name"]=>"{{" . $p["name"] . "}}"
        //]);

    }


    $page = $page = new Page(array(),array(),"/website/templates/" . $prev[0]["folderTemplate"] . "/");
    $aux = $page->setTpl($prev[0]["fileTemplate"],$vueVarTemplate,true);

    return json_encode([
        "variables"=>$varTemplate,
        "template"=>str_replace('"',"&#34",$aux),
        "name"=>$prev[0]["fileTemplate"]
    ]);
    
});





?>