<?php 
require_once("global.php");
Usuario::verificaUsuario();

 require_once("cabecalho.php");
?>
    <h2>Cadastro de Produtos</h2>
    <form class="form-group" action="produto-cadastro.php" method="post">
        <lable for="form-input-name">Nome:</lable>
        <input id="form-input-name" type="text" name="nome" class="form-control" placeholder="nome do produto">
        <lable for="form-input-quantidade">Quantidade:</lable>
        <input id="form-input-quantidade" min="0" type="number" name="quantidade" class="form-control" 
                placeholder="digite a quantidade">
        <lable for="form-input-valor">Valor:</lable>        
        <input id="form-input-valor" min="0" step="0.01" type="number" name="valor" class="form-control" 
                placeholder="digite o valor">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
<?php require_once("rodape.php");?>
