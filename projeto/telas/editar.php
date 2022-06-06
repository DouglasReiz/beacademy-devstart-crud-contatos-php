<div class="s-editar">
    <div class="container">
        <div class="editar-top">
            <h1>Editar <span>contato</span></h1>
            <hr>
        </div>
            <form class="form-editar" method="POST">
            <div class="input-group">
                <input value="<?php echo $dados[0]; ?>" type="text" name="nome" placeholder="Nome">
            </div>
            
            <div class="input-group">
                <input value="<?php echo $dados[1]; ?>" type="text" name="email" placeholder="Email">
            </div>
            
            <div class="input-group">
                <input value="<?php echo $dados[2]; ?>" type="text" name="telefone" placeholder ="Digite seu telefone">
            </div>
            
            <div class="input-button">
                <button class="btn-primary" >Enviar</button>
            </div>
            </form>
    </div>
</div>