<?php

class ProdutoUsuarioDao{

    public function inserir(Produto $produto , Usuario $usuario){
        $query = "INSERT INTO produtos (produto_id,usuario_id) VALUES (:produtoId,:usuarioId)";
        $conexao = Conexao::pegaConexao();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(":produtoId",$produto->getId());
        $stmt->bindValue(":usuarioId",$usuario->getId());
        $stmt->execute();
    }

    public function listar(){
        $query ="SELECT * FROM usuarios u 
                JOIN produto_usuario pu 
                ON u.id=pu.usuario_id 
                JOIN produtos p 
                ON pu.produto_id=p.id";
        $conexao = Conexao::pegaConexao();
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

}