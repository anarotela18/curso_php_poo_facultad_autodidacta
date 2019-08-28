<?php
echo "<a href='index.php'>Inicio</a> <br/><br/>";

//  los metodos estaticos solo sirven para hacer procesos
// NO hace falta instanciarlos
// No se pueden llamar propiedades dentro de los metodos
class miClase{
  public $mensaje = "Hola soy el mensaje";

  public static function hola(){
    return "hola";
  }

  public static function metodo(){
    return self::hola();
  }

}
echo miClase::metodo();



?>
