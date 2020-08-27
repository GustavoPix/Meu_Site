<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="formulario_4">
    <div class="container">
        <div class="grid-6 contato">
            <h2><?php echo htmlspecialchars( $titulo, ENT_COMPAT, 'UTF-8', FALSE ); ?></h2>
            <p><?php echo htmlspecialchars( $texto, ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
        </div>
        <div class="grid-6 form">
            <div class="grid-6">
                <div class="row">
                    <label for="">Label</label>
                    <input type="text" placeholder="input">
                </div>
                <div class="row">
                    <label for="">Label</label>
                    <input type="text" placeholder="input">
                </div>
            </div>
            <div class="grid-6">
                <div class="row">
                    <label for="">Label</label>
                    <input type="text" placeholder="input">
                </div>
                <div class="row">
                    <label for="">Label</label>
                    <input type="text" placeholder="input">
                </div>
            </div>
            <div class="grid-12">
                <div class="row">
                    <label for="">Label</label>
                    <input type="text" placeholder="input">
                </div>
            </div>
            <div class="grid-12">
                <div class="row">
                    <label for="">Label</label>
                    <input type="text" placeholder="input">
                </div>
            </div>
            <button>Enviar</button>
        </div>
    </div>
</div>