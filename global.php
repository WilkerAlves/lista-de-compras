<?php
    function carregaClasse($nomeDaClasse){
        require_once("class/".$nomeDaClasse.".php");
    }
    spl_autoload_register("carregaClasse");
    
    require_once("class/config.php");
?>