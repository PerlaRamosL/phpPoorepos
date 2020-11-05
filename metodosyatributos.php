<?php 

class miClase{
   //Declaramos atributos
	public $atributo1="Hola mundo";


   //Declaramos metodos
   public function miMetodo(){
   	//mandar a llamar un atributo
   	//utilizando la pseudo variable this

   	return $this- >atributo1;

   }

}

 ?>