<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="galeria_4">
    <div class="container">
        <h1 class="titulo"><?php echo htmlspecialchars( $titulo, ENT_COMPAT, 'UTF-8', FALSE ); ?></h1>
        <div class="flex">

            <div class="arrow grid-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-chevron-left">
                    <polyline points="15 18 9 12 15 6"></polyline>
                </svg>
            </div>
            <div class="img grid-10">
                <img src="/img/background.jpg" alt="">
            </div>
            <div class="arrow grid-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-chevron-right">
                    <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
            </div>
        </div>
    </div>

</div>