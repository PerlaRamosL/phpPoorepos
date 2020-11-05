<?php 

     class clasePadre{

     	public function metodoPadre(){
             return "hola desde padre";
     	}

     	public function metodo1(){
              return "este es el metodo padre";
     	}

     }

     class claseHijo extends clasePadre{
     	public function metodoHijo(){
            return parent::metodo1();
     	}

     	public function metodo1(){
     		return "este es el metodo hijo";
     	}

     }


//la herencia es obtener todas las propiedades de una clase a otra
//mediante la palabra reservada extends
  
    // $obj= new claseHijo();
    //echo $obj->metodoPadre();

//instancia rapida o de doble puntuacion
    echo claseHijo::metodoHijo();

 ?>