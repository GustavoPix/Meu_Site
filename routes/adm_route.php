<?php


use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use Source\Models\Page;
use Source\Sql\Models\Projeto;
use Source\Sql\Models\Blog;
use Source\Lists\MainMenu;
use Source\Lists\PaginasMenu;
use Source\Lists\MensagensMenu;
use Source\Lists\SobreMenu;
use Source\Lists\ProjetosMenu;
use Source\Lists\ServicosMenu;
use Source\Sql\Models\Mensagens;
use Source\Sql\Models\Projetos;
use Source\Sql\Models\Content;
use Source\Sql\Models\Equipe;
use Source\Sql\Models\Trabalhos;
use Source\Sql\Models\ProcessoCriacao;
use Source\Sql\Sql;
use Source\Encrypt;
use Source\Sql\Models\User;

$app->get('/adm/login', function (Request $request, Response $response, array $args) use ($app) {

    
    $page = new Page();
    
    $page->setTpl("login",[
    ]);
    
});
$app->get('/adm/paginas/home', function (Request $request, Response $response, array $args) use ($app) {

    //if(User::ValidateUser())
    if(true)
    {
        $sql = new Sql();
        $pages = $sql->select("select * from page ORDER BY name");
        $contentHome = new Content("home");
        $contentContato = new Content("contato");
        $templatesCategories = $sql->select("SELECT * FROM pageCategories ORDER BY id");
        $banner = $sql->select("select * from pageTemplate WHERE id_pageCategories = 3");
        $pageTemplate = $sql->select("select * from pageTemplate");
        
        $page = new Page();
        $page->setTpl("adm_header",[
            "pages"=>$pages,
            "pageTemplate"=>$pageTemplate
        ]);
        $page->setTpl("adm_customPage",[
            "pages"=>$pages,
            "templatesCategories"=> $templatesCategories,
            "banner"=> $banner
        ]);
        $page->setTpl("adm_footer",[

        ]);
    }
    else
    {
        return $response->withRedirect('/');
    }
    
});


$app->post('/debug/encrypt', function (Request $request, Response $response, array $args) use ($app) {

    if(User::ValidateUser())
    {
        echo Encrypt::encryptData($_POST["data"]);
    }
    else
    {
        return $response->withRedirect('/');
    }
    
});

?>