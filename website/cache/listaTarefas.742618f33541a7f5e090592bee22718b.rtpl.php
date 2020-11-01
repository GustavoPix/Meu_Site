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
                <li class="img"><img src="<?php echo ROUTE_WEBSITE; ?>/img/project/listaTarefas1.png" alt=""></li>
                <li class="img"><img src="<?php echo ROUTE_WEBSITE; ?>/img/project/listaTarefas2.png" alt=""></li>
                <li class="img"><img src="<?php echo ROUTE_WEBSITE; ?>/img/project/listaTarefas3.png" alt=""></li>
            </ul>
        </div>
        <div class="right">
            <div class="top">

                <h1>Lista Tarefas</h1>
                <h2>Tecnologias</h2>
                <p>PHP, CSS, HTML, Vuejs, SASS, Slim Framework, Smarty, Javascript, Vagrant</p>
                <p class="descricao">Lista de tarefas com adição, edição e exclusão de tarefas, além de criação de usuários.</p>
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