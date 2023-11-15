<?php

    class Servicios extends Controlador{

        public function index(){
        
            $cabecera = [
                'item' => 'servicios'
            ];

            $this->vista("pages/servicios",$cabecera);

        }

    }


?>