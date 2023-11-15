<?php

    class Producto extends Controlador{

        public function index(){
        
            $cabecera = [
                'item' => 'producto'
            ];

            $this->vista("pages/producto",$cabecera);

        }

    }


?>