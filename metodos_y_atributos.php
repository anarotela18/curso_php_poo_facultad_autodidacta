<?php

echo "<a href='index.php'>Inicio</a> <br/><br/>";


class MiClase{
  //declaramos atributos
  public $atributo1 = "Hola Mundo";

  //declaramos metodos
  public function miMetodo(){
    // mandar a llamar un atributo
    // utilizando la pseudo variable this
    return $this -> atributo1;
  }
}
?>
