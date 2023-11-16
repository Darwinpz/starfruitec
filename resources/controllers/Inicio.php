<?php

    class Inicio extends Controlador{
        
        public function __construct(){

        }
        
        public function index(){
        
            $cabecera = [
                'item' => 'inicio'
            ];

            $this->vista("pages/inicio",$cabecera);

        }


    }


?>
