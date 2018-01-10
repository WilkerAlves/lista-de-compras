<?php
    require_once("class/config.php");
    spl_autoload_register(function($className){
        if(file_exists("class/".$className.".php")){
            require_once("class/".$className.".php");                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         class/".$className.".php");
        }
    }
    
    )
?>