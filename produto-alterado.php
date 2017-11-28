<?php
    try{
        require_once("global.php");
        Usuario::verificaUsuario();
        $nome = $_POST['nome'];
        $quantidade = $_POST['quantidade'];
        $valor = $_POST['valor'];
        $id = $_POST['id'];
    
        $produto = new Produto($nome,$quantidade,$valor);
        $produto->setId($id);
    
        $produtoDao = new ProdutoDao();
        $produtoDao->atualizar($produto);
    
        header("Location:produto-lista.php");
    }catch (Exception $e){
        Erro::trataErro($e);
    }

