<?php

class UsuarioDao{

    function inserirUsuario(Usuario $usuario){
        $query = "INSERT INTO usuarios (email,senha,nome) VALUES (:email,:senha,:nome)";
        $conexao = Conexao::pegaConexao();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(":email",$usuario->getEmail());
        $stmt->bindValue(":senha",$usuario->getSenha());
        $stmt->bindValue(":nome",$usuario->getNome());
        $resultado = $stmt->execute();
        return $resultado;
    }

    function buscarUsuario(Usuario $usuario){
        $query = "SELECT * FROM usuarios WHERE email=:email AND senha=:senha";
        $conexao = Conexao::pegaConexao();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(":email",$usuario->getEmail());
        $stmt->bindValue(":senha",$usuario->getSenha());
        $stmt->execute();
        $usuario = $stmt->fetch();
        return $usuario;
    }
}