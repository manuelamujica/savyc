<?php
require_once 'conexion.php';

class Divisa extends Conexion{
    private $nombre, $simbolo;
    private $conex;

    public function __construct(){
        $this->conex= new Conexion();
        $this->conex=$this->conex->conectar();
    }

    public function incluir(){
        $registro="INSERT INTO divisas(nombre, abreviatura) VALUES(:nombre, :abreviatura)";

        $strExec=$this->conex->prepare($registro);
        $strExec->bindParam(':nombre', $this->nombre);
        $strExec->bindParam(':abreviatura', $this->simbolo);
        $resul=$strExec->execute();
        if ($resul){
            $res=1;
        }else{
            $res=0;
        }
        return $res;
    }

    public function consultar(){
        $registro="select * from divisas";
        $consulta=$this->conex->prepare($registro);
        $resul=$consulta->execute();
        $datos=$consulta->fetchAll(PDO::FETCH_ASSOC);
        if($resul){
            return $datos;
        }else{
            return $res=0;
        }
    }

    public function setnombre($valor){
        $this->nombre=$valor;
    }
    public function setsimbolo($valor){
        $this->simbolo=$valor;
    }

    public function getnombre(){
        return $this->nombre;
    }
    public function getsimbolo(){
        return $this->simbolo;
    }
}