<?php 
    try{
        require_once("global.php");
        Usuario::verificaUsuario();
        $id = $_POST['id'];
        $produtoDao = new ProdutoDao();
        $produtoDao->remover($id);
        header("Location:produto-lista.php");
    }catch(Exception $e){
        Erro::trataErro($e);
    }