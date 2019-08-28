<?php
// la herencia es obtener todas las propiedades de una a otra
// mediante la palabra reserva extends

echo "<a href='index.php'>Inicio</a> <br/><br/>";

  class clasePadre{
    public function metodoPadre(){
      return "Hola desde el metodoPadre ". "<br/>";
    }
    public function metodo1(){
      return "Este es metodo padre" . "<br/>";
    }
  }
  class claseHijo extends clasePadre{
    public function metodoHijo(){
      // parent sive para mandar llamar los metodos de la clase padre
      // self sirve para mandar llamar los metodos de la misma clase
      return parent::metodo1();
    }

    public function metodo1(){
      return "Este es metodo hijo". "<br/>";
    }
  }

  $objeto = new claseHijo();
  echo $objeto -> metodoHijo();

  //instancia rapida o de doble puntuacion
  //echo claseHijo::metodoHijo();

?>
