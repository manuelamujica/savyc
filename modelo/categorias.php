<?php 
require_once "conexion.php";
class Categoria extends Conexion{

    private $conex;
    private $nombre;

    public function __construct(){
        $this->conex = new Conexion();
        $this->conex = $this->conex->conectar();
    }

#GETTER Y SETTER
    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

/*==============================
REGISTRAR CATEGORIA
================================*/
    private function crearCategoria(){

        $sql = "INSERT INTO categorias(nombre) VALUES(:nombre)";

        $strExec = $this->conex->prepare($sql);
        $strExec->bindParam(":nombre", $this->nombre);

        $resul = $strExec->execute();

        if($resul){
            $r = 1;
        }else{
            $r = 0;
        }
        return $r;

    }
    public function getcrearCategoria(){
        return $this->crearCategoria();
    }
/*==============================
REGISTRAR CATEGORIA
================================*/

    
}