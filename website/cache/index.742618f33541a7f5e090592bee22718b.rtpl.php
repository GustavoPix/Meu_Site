<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Rokkitt&family=Ubuntu+Mono:wght@400;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="<?php echo ROUTE_WEBSITE; ?>/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <title>Home | Gustavo Carvalho</title>
</head>

<body>
    <div class="header" id="header">
        <h2>&#60;Gustavo Carvalho/&#62;</h2>
        <div
            v-show="!open" 
            class="img buttonOpenMenu" 
            @click="toogleMenu()"
        >
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-menu">
                <line x1="3" y1="12" x2="21" y2="12"></line>
                <line x1="3" y1="6" x2="21" y2="6"></line>
                <line x1="3" y1="18" x2="21" y2="18"></line>
            </svg>
        </div>
        <nav :class="{openMenu : open}">
            <p class="closeMenu" @click="closeMenu()">CloseMenu()</p>
            <p>[</p>
            <ul>
                <li><a @click="closeMenu()" href="#home">Home,</a></li>
                <li><a @click="closeMenu()" href="#trabalhos">Trabalhos,</a></li>
                <li><a @click="closeMenu()" href="#sobre">Sobre,</a></li>
                <li><a @click="closeMenu()" href="#contatos">Contatos</a></li>
            </ul>
            <p>]</p>
        </nav>
    </div>
    <div class="container" id="home">
        <div class="bannerPrincipal" id="bannerPrincipal">
            <h1>HOME</h1>
            <h2>Olá, meu nome é <span>Gustavo Carvaho</span></br>
                Eu sou um desenvoldedor de <span class="cursor">{{produtoSite}}</span></h2>
            <p>Conheça um pouco sobre mim abaixo</p>
            <div class="scrollDown">
                <div class="img">
                    <div class="ballScroll"></div>
                    <img src="<?php echo ROUTE_WEBSITE; ?>/img/scroll.svg" alt="">
                </div>
                <p>Scroll</p>
            </div>
        </div>
    </div>
    <div class="container" id="trabalhos">
        <div class="trabalhos">
            <h1>TRABALHOS</h1>

            <div class="listaTrabalhos">
                <div class="trabalho grid-3">
                    <a href="/projeto/ilustranext">
                        <div class="img">
                            <img src="<?php echo ROUTE_WEBSITE; ?>/img/Ilustranext.png" alt="">
                        </div>
                        <p>Ilustranext</p>
                    </a>
                </div>
                <div class="grid-1"></div>
                <div class="trabalho grid-3">
                    <a href="/projeto/configurator">
                        <div class="img">
                            <img src="<?php echo ROUTE_WEBSITE; ?>/img/Configurator.png" alt="">
                        </div>
                        <p>Configurator</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container" id="sobre">
        <div class="sobre">
            <h2>Sobre</h2>
            <div class="algoritimo">
                <p class="ident-0"><span class="color1">class</span> <span class="color3">GustavoCarvalho</span>{</p>
                <p class="ident-1"> <span class="color1">constructor</span>() {</p>
                <p class="ident-2"> <span class="color1">this</span>.<span class="color6">name</span> = <span
                        class="color7">"Gustavo Carvalho"</span>;</p>
                <p class="ident-2"> <span class="color1">this</span>.<span class="color6">country</span> = <span
                        class="color7">"Brasil"</span>;</p>
                <p class="ident-2"> <span class="color1">this</span>.<span class="color6">email</span> = <span
                        class="color7">"gustavo1pix@gmail.com"</span>;</p>
                <p class="ident-1"> }</p>
                <p class="ident-1"> <span class="color4">experienceInDevelopment</span>() {</p>
                <p class="ident-2"> <span class="color5">return</span> [</p>
                <p class="ident-3"> {</p>
                <p class="ident-4"> <span class="color6">date:</span> <span class="color7">"2018-now"</span>,</p>
                <p class="ident-4"> <span class="color6">local:</span> <span class="color7">"Ilustraviz"</span>,</p>
                <p class="ident-4"> <span class="color6">function:</span> <span class="color7">"Gerente de TI e
                        desenvolvimento"</span></p>
                <p class="ident-3"> },</p>
                <p class="ident-3"> {</p>
                <p class="ident-4"> <span class="color6">date:</span> <span class="color7">"2019-now"</span>,</p>
                <p class="ident-4"> <span class="color6">local:</span> <span class="color7">"Prismacode"</span>,</p>
                <p class="ident-4"> <span class="color6">function:</span> <span class="color7">"Full-stack
                        developer"</span></p>
                <p class="ident-3"> }</p>
                <p class="ident-2"> ]</p>
                <p class="ident-1"> }</p>
                <p class="ident-1"> <span class="color4">education</span>() {</p>
                <p class="ident-2"> <span class="color5">return</span> [</p>
                <p class="ident-3"> {</p>
                <p class="ident-4"> <span class="color6">date:</span> <span class="color7">"2019-2020"</span>,</p>
                <p class="ident-4"> <span class="color6">local:</span> <span class="color7">"Alura"</span>,</p>
                <p class="ident-4"> <span class="color6">function:</span> <span class="color7">"Formação Devops"</span>
                </p>
                <p class="ident-3"> },</p>
                <p class="ident-3"> {</p>
                <p class="ident-4"> <span class="color6">date:</span> <span class="color7">"2019-2019"</span>,</p>
                <p class="ident-4"> <span class="color6">local:</span> <span class="color7">"Origamid"</span>,</p>
                <p class="ident-4"> <span class="color6">function:</span> <span class="color7">"Vue.js"</span></p>
                <p class="ident-3"> },</p>
                <p class="ident-3"> {</p>
                <p class="ident-4"> <span class="color6">date:</span> <span class="color7">"2018-2019"</span>,</p>
                <p class="ident-4"> <span class="color6">local:</span> <span class="color7">"Origamid"</span>,</p>
                <p class="ident-4"> <span class="color6">function:</span> <span class="color7">"CSS do basico ao
                        avançado com SASS"</span></p>
                <p class="ident-3"> },</p>
                <p class="ident-3"> {</p>
                <p class="ident-4"> <span class="color6">date:</span> <span class="color7">"2017-2018"</span>,</p>
                <p class="ident-4"> <span class="color6">local:</span> <span class="color7">"Origamid"</span>,</p>
                <p class="ident-4"> <span class="color6">function:</span> <span class="color7">"UX e UI Design"</span>
                </p>
                <p class="ident-3"> },</p>
                <p class="ident-3"> {</p>
                <p class="ident-4"> <span class="color6">date:</span> <span class="color7">"2013-2015"</span>,</p>
                <p class="ident-4"> <span class="color6">local:</span> <span class="color7">"Universidade Cruzeiro do
                        Sul"</span>,</p>
                <p class="ident-4"> <span class="color6">function:</span> <span class="color7">"Tecnologia em Jogos
                        Digitais"</span></p>
                <p class="ident-3"> }</p>
                <p class="ident-2"> ]</p>
                <p class="ident-1"> }</p>
                <p class="ident-1"> <span class="color4">skills</span>() {</p>
                <p class="ident-2"> <span class="color5">return</span> [</p>
                <p class="ident-3"> <span class="color7">"HTML5.1/CSS4/JS", "SASS", "GIT", "Eletron", "PHP", "Vue.js",
                        "Vagrant", "UX/UI", "C#", "Unity", "Unreal", "Blueprint", "AWS Instances", "MySQL", "Figma",
                        "Adobe XD"</span></p>
                <p class="ident-2"> ]</p>
                <p class="ident-1"> }</p>
                <p class="ident-1"> <span class="color4">about</span>(){</p>
                <p class="ident-2"> <span class="color5">return</span> {</p>
                <p class="ident-3"> <span class="color6">paixoes:</span> [</p>
                <p class="ident-4"> <span class="color7">"Jogos","3D","Estudo","Filmes"</span></p>
                <p class="ident-3"> ],</p>
                <p class="ident-3"> <span class="color6">resumo:</span> <span class="color7">"28 anos, apaixonado por
                        games, programação e filmes, sou uma pessoa ambiciosa e sempre estou atrás de novos desafios e
                        conhecimentos."</span></p>
                <p class="ident-2"> }</p>
                <p class="ident-1"> }</p>
                <p class="ident-0">}</p>
            </div>
        </div>
    </div>
    <div class="container">

        <div class="contatos" id="contatos">
            <h2>CONTATOS</h2>
            <ul>
                <li>
                    <div class="img">
                        <img src="<?php echo ROUTE_WEBSITE; ?>/img/mail.svg" alt="">
                    </div>
                    <p><a href="mailto:gustavo1pix@gmail.com">gustavo1pix@gmail.com</a></p>
                </li>
                <li>
                    <div class="img">
                        <img src="<?php echo ROUTE_WEBSITE; ?>/img/github.svg" alt="">
                    </div>
                    <p><a href="https://github.com/GustavoPix" target="_blank">GustavoPix</a></p>
                </li>
                <li>
                    <div class="img">
                        <img src="<?php echo ROUTE_WEBSITE; ?>/img/linkedin.svg" alt="">
                    </div>
                    <p><a href="https://www.linkedin.com/in/gustavolcarvalho/" target="_blank">gustavolcarvalho</a></p>
                </li>
            </ul>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <p>Feito com</p>
            <div class="img">
                <img src="<?php echo ROUTE_WEBSITE; ?>/img/heart.svg" alt="">
            </div>
            <p>por Gustavo Carvalho</p>
        </div>
    </div>
    <script src="<?php echo ROUTE_WEBSITE; ?>/js/header.js"></script>
    <script src="<?php echo ROUTE_WEBSITE; ?>/js/banner.js"></script>
</body>

</html>