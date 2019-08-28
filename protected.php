<?php

echo "<a href='index.php'>Inicio</a> <br/><br/>";


// los metodos protegidos solo pueden ser accedidos
// desde herencia de clases o solo desde clases hijas
// y debe ser utilizado por un metodo hijo
// a traves de parent

class clasePadre{
  protected function metodo1(){
    return "metodo protegido";
  }
}
class claseHija extends clasePadre{
  public function muestra(){
    return parent::metodo1();
  }
}

$objeto = new claseHija();
echo $objeto->muestra();
?>
