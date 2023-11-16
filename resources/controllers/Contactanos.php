<?php

    class Contactanos extends Controlador{
        
        public function __construct(){

        }

        public function index(){
        
            $cabecera = [
                'item' => 'contactanos'
            ];

            $this->vista("pages/contactanos",$cabecera);

        }

    }


?>
