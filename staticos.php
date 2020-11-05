<?php 

     class miClase{
        public $mensaje="hola";

        public function hola(){
        	return "hola";
        }

           public static function metodo(){
                return self::hola();
           }
     }

    echo miclase::metodo();
  
 ?>