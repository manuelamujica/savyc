<?php 
require_once "conexion.php";
class Rol extends Conexion{

    private $conex;
    private $rol;
    private $status;

    public function __construct(){
        $this->conex = new Conexion();
        $this->conex = $this->conex->conectar();
    }

#GETTER Y SETTER
    public function getRol(){
        return $this->rol;
    }
    public function setRol($rol){
        $this->rol = $rol;
    }
    public function getStatus(){
        return $this->status;
    }
    public function setStatus($status){
        $this->status = $status;
    }

/*==============================
REGISTRAR TIPOS DE USUARIO
================================*/
    private function crearRol(){

        $sql = "INSERT INTO tipo_usuario(rol,status) VALUES(:rol,:status)";

        $strExec = $this->conex->prepare($sql);
        $strExec->bindParam(":rol", $this->rol);
        $strExec->bindParam(":status", $this->status);

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
        $registro="select * from tipo_usuario";
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