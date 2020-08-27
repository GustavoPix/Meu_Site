<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="banner_1">
    <div class="container">
        <div  class="left">
            <h1><?php echo htmlspecialchars( $titulo, ENT_COMPAT, 'UTF-8', FALSE ); ?></h1>
            <p><?php echo htmlspecialchars( $texto0, ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
        </div>
        <div class="right">
            <p><?php echo htmlspecialchars( $texto1, ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
            <div class="input">
                <input type="email" placeholder="email / telefone">
                <button type="button">Enviar</button>
            </div>
        </div>
    </div>
</div>