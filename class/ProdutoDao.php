<?php

class ProdutoDao{
    
    public function inserir(Produto $produto){
        $query = "INSERT INTO produtos (nome,quantidade,valor) VALUES (:nome,:quantidade,:valor)";
        $conexao = Conexao::pegaConexao();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(":nome",$produto->getNome());
        $stmt->bindValue(":quantidade",$produto->getQuantidade());
        $stmt->bindValue(":valor",$produto->getValor());
        $stmt->execute();
    }

    public function listar(){
        $query ="SELECT * FROM produtos";
        $conexao = Conexao::pegaConexao();
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function buscar($id){
        $query = "SELECT * FROM produtos WHERE id=:id";
        $conexao = Conexao::pegaConexao();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(":id",$id);
        $stmt->execute();
        $produtos = $stmt->fetchAll();
        foreach($produtos as $produto){
            return $produto;
        }
    }

    public function atualizar(Produto $produto){
    $query = "UPDATE produtos SET nome=:nome,quantidade=:quantidade,valor=:valor WHERE id=:id";
    $conexao = Conexao::pegaConexao();
    $stmt = $conexao->prepare($query);
    $stmt->bindValue(":nome",$produto->getNome());
    $stmt->bindValue(":quantidade",$produto->getQuantidade());
    $stmt->bindValue(":valor",$produto->getValor());
    $stmt->bindValue(":id",$produto->getId());
    $stmt->execute();
    }

    public function remover($id){
    $query="DELETE FROM produtos WHERE id=:id";
    $conexao = Conexao::pegaConexao();
    $stmt = $conexao->prepare($query);
    $stmt->bindValue(":id",$id);
    $stmt->execute();    
    }
}