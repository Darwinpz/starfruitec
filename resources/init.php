<?php

    //cargar librerias

    require_once 'configs/config.php';
    
    require_once 'helpers/url_helper.php';
        
    //AutoLoad de librerias php
    spl_autoload_register(function($nombreClase){

        require_once 'library/' .$nombreClase. '.php';

    });

?>