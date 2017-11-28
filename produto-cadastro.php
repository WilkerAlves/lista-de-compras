<?php
try{
    require_once("global.php");
    Usuario::verificaUsuario();
    $nome = $_POST['nome'];
    $quantidade = $_POST['quantidade'];
    $valor = $_POST['valor'];
    $produto = new Produto($nome,$quantidade,$valor);
    $produtoDao = new ProdutoDao();
    $produtoDao->inserir($produto);
    header("Location:produto-lista.php");
}catch(Exception $e){
    Erro::trataErro();
}
