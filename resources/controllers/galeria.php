<?php

    class Galeria extends Controlador{
        
        public function __construct(){

        }
        
        public function index(){
        
            $cabecera = [
                'item' => 'galeria'
            ];

            $this->vista("pages/galeria",$cabecera);

        }

    }


?>