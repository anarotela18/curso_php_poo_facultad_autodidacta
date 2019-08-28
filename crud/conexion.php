<?php
  class conectar{
    private $servidor = "localhost";
    private $usuario = "root";
    private $password = "";
    private $bd = "crud_poo_fa";

    public function conexion(){
      $conexion = mysqli_connect( $this -> servidor,
                                  $this -> usuario,
                                  $this -> password,
                                  $this -> bd);
      return $conexion;
    }
  }
  /*$objeto = new conectar();
  if($objeto -> conexion()){
    echo "conectado con exito";
  }else{
    echo "ocurrio un error con la bd";
  }*/
?>
