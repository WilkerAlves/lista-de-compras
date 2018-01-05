<?php
try{
    require_once("global.php");
    $email = $_POST['emailCadastrar'];
    $senha = $_POST['senhaCadastrar'];
    $nome = $_POST['nomeCadastrar'];
    $usuario = new Usuario($email,$senha,$nome);
    $usuarioDao = new UsuarioDao();
    $resultado = $usuarioDao->inserirUsuario($usuario);
    if($resultado == TRUE){
        header("Location:index.php");
        setcookie("usuarioCadastrado",$usuario->getNome(),time()+3);
    }else{
        header("Location:form-cadastro-usuario.php?fail=0");
    }
}catch(Exception $e){
    Erro::trataErro($e);
}

    require_once("rodape.php");
?>