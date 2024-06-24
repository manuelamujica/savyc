<?php 
require_once 'conexion.php';

class Tpago extends Conexion{
    private $metodo; 
    private $moneda; 
    private $conex;

    public function __construct(){
        $this->conex= new Conexion();
        $this->conex=$this->conex->conectar();
    }

    public function incluir(){
        $registro="INSERT INTO tipo_pago(medio_pago) VALUES(:medio_pago)";

        $strExec=$this->conex->prepare($registro);
        $strExec->bindParam(':medio_pago', $this->metodo);
        //$strExec->bindParam(':moneda', $this->moneda);
        $resul=$strExec->execute();
        if ($resul){
            $res=1;
        }else{
            $res=0;
        }
        return $res;
    }

    #set
    public function setmetodo($valor){
        $this->metodo=$valor;
    }
    public function setmoneda($valor){
        $this->moneda=$valor;
    }

    #get
    public function getmetodo(){
        return $this->metodo;
    }
    public function getmoneda(){
        return $this->moneda;
    }
}