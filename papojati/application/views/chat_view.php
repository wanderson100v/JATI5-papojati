<a href = "<?=site_url("login")?>">Voltar</a>

<div class = 'row'>
    <article class = "col-10 border">
        <header>
            <h1>Mensagens</h1>
        </header>
        <ul class="list-group">
            <?php
                foreach($mensagens as $mensagem){
                    echo '<li class="list-group-item">'.$mensagem['login'].'-'.$mensagem['texto'].'</li>';
                }
            ?>
        </ul>

        <form action="<?=site_url('chat/enviar/'.$usuario_logado['id'])?>" method = "POST">
            <div class="form-group mt-4">
                <textarea class="form-control" name ="texto" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary mb-5">Enviar</button>
        </form>
    </article>
    <article class = "col-2 border">
        <header>
            <h1>Usuário</h1>
        </header>
        <ul class="list-group">
            <?php
                foreach($usuarios as $usuario){
                    if($usuario['id'] == $usuario_logado['id'])
                        echo '<li class="list-group-item active">'.$usuario['login'].'</li>';
                    else
                        echo '<li class="list-group-item">'.$usuario['login'].'</li>';
                }
            ?>
        </ul>
    </article>
</div>

