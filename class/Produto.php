<?php

Class Produto{
    private $id;
    private $nome;
    private $quantidade;
    private $valor;

    function __construct($nome,$quantidade,$valor){
        $this->nome = $nome;
        $this->quantidade = $quantidade;
        $this->valor = $valor;
    }

    public function getNome(){
      return $this->nome;
    }

    public function getQuantidade(){
      return $this->quantidade;
    }

    public function getValor(){
        return $this->valor;
    }

    public function getId(){
        return $this->id;
    }


    public function setNome($nome){
      $this->nome= $nome;
    }

    public function setQuantidade($quantidade){
        $this->getQuantidade = $quantidade;
    }

    public function setValor($valor){
        $this->valor = $valor;
    }

    public function setId($id){
        $this->id = $id;
    }
}