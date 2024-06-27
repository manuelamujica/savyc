<?php 
require_once "conexion.php";
class General extends Conexion{

    private $conex;
    private $rif;
    private $nombre;
    private $direccion;
    private $descripcion;

    public function __construct(){
        $this->conex = new Conexion();
        $this->conex = $this->conex->conectar();
    }

#GETTER Y SETTER
    public function getRif(){
        return $this->rif;
    }
    public function setRif($rif){
        $this->rif = $rif;
    }
    public function getNom(){
        return $this->nombre;
    }
    public function setNom($nombre){
        $this->nombre = $nombre;
    }
    public function getDir(){
        return $this->direccion;
    }
    public function setDir($direccion){
        $this->direccion = $direccion;
    }
    public function getDescri(){
        return $this->descripcion;
    }
    public function setDescri($descripcion){
        $this->descripcion = $descripcion;
    }

/*==============================
REGISTRAR TIPOS DE USUARIO
================================*/
    private function crearRol(){

        $sql = "INSERT INTO config_empresa(rif,nombre,direccion,descripcion) VALUES(:rif,:nombre,:direccion,:descripcion)";

        $strExec = $this->conex->prepare($sql);
        $strExec->bindParam(":rif", $this->rif);
        $strExec->bindParam(":nombre", $this->nombre);
        $strExec->bindParam(":direccion", $this->direccion);
        $strExec->bindParam(":descripcion", $this->descripcion);

        $resul = $strExec->execute();

        if($resul){
            $r = 1;
        }else{
            $r = 0;
        }
        return $r;

    }
    public function getcrearRol(){
        return $this->crearRol();
    }

    public function consultar(){
        $registro="select * from config_empresa";
        $consulta=$this->conex->prepare($registro);
        $resul=$consulta->execute();
        $datos=$consulta->fetchAll(PDO::FETCH_ASSOC);
        if($resul){
            return $datos;
        }else{
            return $res=0;
        }
    }

}