<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="photoDestaque_1">
    <div class="container">
        <div class="grid-6 img">
            <img src="/img/background.jpg" alt="">
        </div>
        <div class="grid-6 content">
            <h2><?php echo htmlspecialchars( $titulo, ENT_COMPAT, 'UTF-8', FALSE ); ?></h2>
            <h3><?php echo htmlspecialchars( $subtitulo, ENT_COMPAT, 'UTF-8', FALSE ); ?></h3>
            <p><?php echo htmlspecialchars( $texto, ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
        </div>
    </div>
</div>