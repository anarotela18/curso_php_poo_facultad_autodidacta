<?php

echo "<a href='index.php'>Inicio</a> <br/><br/>";

  class Metodos{
    public function mandarColor($valor){
      if($valor == 1){
        return "Rojo";
      }else if($valor == 2){
        return "Negro";
      }else if($valor == 3){
        return "Azul";
      }
    }
    public function darDeAltaColor($tipocolor){
      // $objeto = new Metodos();
      // return $objeto ->mandarColor($tipocolor);
      // La propiedad self sirve para mandar llamar elementos de la misma clase
      return self::mandarColor($tipocolor);
    }
  }


  $objeto = new Metodos();
  echo $objeto ->darDeAltaColor(1);
?>
