<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Rokkitt&family=Ubuntu+Mono:wght@400;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="<?php echo ROUTE_WEBSITE; ?>/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <title>Document</title>
</head>

<body class="noPaddingTop">
    <div class="project">
        <div class="left">
            <ul>
                <li class="img"><img src="<?php echo ROUTE_WEBSITE; ?>/img/project/ilustranext_1.png" alt=""></li>
                <li class="img"><img src="<?php echo ROUTE_WEBSITE; ?>/img/project/ilustranext_2.png" alt=""></li>
                <li class="img"><img src="<?php echo ROUTE_WEBSITE; ?>/img/project/ilustranext_3.png" alt=""></li>
                <li class="img"><img src="<?php echo ROUTE_WEBSITE; ?>/img/project/ilustranext_4.png" alt=""></li>
                <li class="img"><img src="<?php echo ROUTE_WEBSITE; ?>/img/project/ilustranext_5.png" alt=""></li>
            </ul>
        </div>
        <div class="right">
            <div class="top">

                <h1>Ilustranext</h1>
                <h2>Tecnologias</h2>
                <p>PHP, CSS, HTML, Vuejs, SASS, Slim Framework, Rain TPL, Javascript, AWS API</p>
                <p class="descricao">Sistema de gerenciamento de projetos e usuários, com áre ade cadastro de produtos, projetos, automações de processos, tasks, alertas, busca por tags usando a API da AWS Rekoginition</p>
                    <!--    
                        <button>Clique e conheça</button>
                    -->
            </div>
            <div class="bottom">
                <p><a href="/">Voltar</a></p>
            </div>
        </div>
    </div>
</body>

</html>