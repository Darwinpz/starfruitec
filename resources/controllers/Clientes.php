<?php

    class Clientes extends Controlador{
        
        public function __construct(){

        }
        
        public function index(){
        
            $cabecera = [
                'item' => 'clientes'
            ];

            $this->vista("pages/clientes",$cabecera);

        }

    }


?>