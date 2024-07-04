<?php 
require_once "conexion.php";

class Categoria extends Conexion{

    private $conex;
    private $nombre;
    #private $status=1;

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

    public function getStatus(){
        return $this->nombre;
    }
    public function setStatus($status){
        $this->nombre = $status;
    }


/*==============================
REGISTRAR CATEGORIA
================================*/
    private function registrar(){

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

    public function getregistrar(){
        return $this->registrar();
    }

/*==============================
MOSTRAR CATEGORIAS
================================*/
    public function mostrar(){
        $registro = "select * from categorias";
        $consulta = $this->conex->prepare($registro);
        $resul = $consulta->execute();

        $datos = $consulta->fetchAll(PDO::FETCH_ASSOC);
        if($resul){
            return $datos;
        }else{
            return $r=0;
        }

    }
    
}