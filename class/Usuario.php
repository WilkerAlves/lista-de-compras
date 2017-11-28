<?php

class Usuario{

    private $id;
    private $email;
    private $senha;


    function __construct($email, $senha,$nome="sem nome"){
        $this->email = $email;
        $senhaCrip = $this->criptografarSenha($senha);
        $this->senha = $senhaCrip;
        $this->nome = $nome;
    }


    public function criptografarSenha($senha){
        $senhaCriptografada = sha1($senha); 
        return $senhaCriptografada;
    }

    function getEmail(){
        return $this->email;
    }

    function getSenha(){
        return $this->senha;
    }

    function getNome(){
        return $this->nome;
    }

    function getId(){
        return $this->id;
    }

    function setNome($nome){
        $this->nome = $nome;
    }

    public static function verificaUsuario(){
        if(!isset($_COOKIE['usuarioLogado'])){
            header("Location:index.php");
            setcookie("falhaDeSeguranca",TRUE,time()+3);
         };
    }

    
}