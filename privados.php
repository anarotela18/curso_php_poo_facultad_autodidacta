<?php
// un metodo privado solo puede ser accedido
// en la misma clase donde fue creado,
// al mismo tiempo no puede mostrarse afuera o en instancia
// debe manejarse dentro de un metodo de la misma clase

echo "<a href='index.php'>Inicio</a> <br/><br/>";

class clase1{
  private function saludar(){
    return "Saludando ". "<br>";
  }
  public function mandaSaludo(){
    return self::saludar();
  }
}

echo clase1::mandaSaludo();
?>
