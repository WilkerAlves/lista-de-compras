<?php
require_once("config.php");

class Conexao{
    public static function pegaConexao(){
        $conexao = new PDO(DB_DRIVE.':host='.DB_HOST.';dbname='.DB_NAME,DB_USER,DB_PASSWORD);
        return $conexao;
    }
}