<?php require_once("cabecalho.php");?>
<?php if(isset($_GET['fail']) && $_GET['fail']=="0"):?>
    <h2>Cadastro de Usuarios</h2>
    <p class="text-danger"> Erro ao cadastrar o usuario, por favor refaça o cadastramento</p>
<?php endif ?>
    <form class="form-group" action="cadastro-usuario.php" method="post">
        <label for="usuarioNome">Nome:</label>
        <input class="form-control" type="text" id="usuarioNome"  name="nomeCadastrar">
        <label for="usuarioEmail">E-mail:</label>
        <input class="form-control" type="email" id="usuarioEmail"  name="emailCadastrar">
        <label for="usuarioSenha">Senha:</label>
        <input class="form-control" type="password" id="usuarioSenha" name="senhaCadastrar">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
<?php require_once("rodape.php");?>
