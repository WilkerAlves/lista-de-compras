<?php

try{
    require_once("global.php");
    $usuario = new Usuario($_POST['email'],$_POST['senha']);
    $usuarioDao = new UsuarioDao();
    $retornoUsuario = $usuarioDao->buscarUsuario($usuario);
    $usuario->setNome($retornoUsuario['nome']); 
    if(empty($retornoUsuario)){
        header("Location:index.php");
    }else{
        header("Location:index.php");
        setcookie("usuarioLogado", $usuario->getNome(),time()+3600);  
    }
}catch (Exception $e){
    Erro::trataErro($e);
};