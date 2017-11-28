<?php require_once("cabecalho.php");?>

<?php if(isset($_COOKIE['usuarioCadastrado'])):?>
    <p class="text-success">Usuario <?php echo $_COOKIE['usuarioCadastrado'] ?> cadastrado com sucesso, faça o login.</p>
<?php endif;?>

<?php if(isset($_COOKIE['falhaDeSeguranca']) && $_COOKIE['falhaDeSeguranca']==TRUE):?>
    <p class="text-danger">Usuario não cadastrado, por favor cadastre-se ou efetue o login!</p>
<?php endif;?>

<?php if(!isset($_COOKIE['usuarioLogado'])):?>
        <form class="form-group" action="login.php" method="post">
                <label for="usuarioEmail">E-mail</label>
                <input class="form-control" type="email" id="usuarioEmail"  name="email">
                <label for="usuarioSenha">Senha</label>
                <input class="form-control" type="password" id="usuarioSenha" name="senha">
                <button type="submit" class="btn btn-primary">Entrar</button>
            </form>
            <a href="form-cadastro-usuario.php">Cadastre-se</a>
<?php else:?>
        <h2>Bem vindo <?php echo $_COOKIE['usuarioLogado']?> a sua lista de compras!</h2>
            <figure id="imagem-principal-index">    
                <img class="img-fluid" src="img/carrinho.png" alt="imagens de um carrinho de compras">
            </figure>
<?php endif?>
<?php require_once("rodape.php");?>
