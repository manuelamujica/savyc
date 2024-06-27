<?php 

require_once 'conexion.php';

class Proveedor extends Conexion{

private $conex;
private $rif;
private $razon_social;
private $correo;
private $direccion;
private $status;
private $cedula;
private $nombre;
private $apellido;
private $telefono;


   public function __construct(){
        $this->conex = new Conexion();
        $this->conex = $this->conex->conectar();
    }

   public function getRif(){
    return $this->rif;
  }
 
    public function setRif($rif){
      $this->rif=$rif;
    }

    public function getRazon_social(){
    return $this->razon_social;
  }

    public function setRazon_social($razon_social){
      $this->razon_social=$razon_social;
    }
  
    public function get_Email(){
    return $this->correo;
  }
 
     public function setcorreo($valor){
      $this->correo=$valor;
    }



    public function getDireccion(){
     return $this->direccion;
  }
   
   public function setDireccion($direccion){
      $this->direccion=$direccion;
    }

  
     
     public function getStatus(){
        return $this->status;
    }
   
   public function setStatus($status){
        $this->status=$status;
    }

    public function getCedula(){
        return $this->cedula;
    }
   
   public function setCedula($cedula){
        $this->cedula=$cedula;
    }
 
    public function getNombre(){
        return $this->nombre;
    }
   
    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
 
  public function getApellido(){
        return $this->apellido;
    }
   
   public function setApellido($apellido){
        $this->apellido=$apellido;
    }

    public function getTelefono(){
    return $this->telefono;
  }
   
   public function setTelefono($telefono){
      $this->telefono=$telefono;
    }
   
   /*public function getTelefono(){
        return $this->telefono;
    }
   
   public function setTelefono($Telefono){
        $this->telefono=$Telefono;
    }

  public function getStatus(){
        return $this->status;
    }
   
   public function setStatus($status){
        $this->status=$status;
    }*/

//metodos crud  //

public function registrar(){
    
  $sql = "INSERT INTO proveedores(rif,razon_social,email,direccion)  VALUES  (:rif,:razon_social,:email,:direccion)";

    $strExec =$this->conex->prepare($sql);

    $strExec->bindParam(':rif',$this->rif);
    $strExec->bindParam(':razon_social',$this->razon_social);
    $strExec->bindParam(':email',$this->correo);
    $strExec->bindParam(':direccion',$this->direccion);
    //$strExec->bindParam(':status',$this->status);
    //$strExec->bindParam(':cedula',$this->cedula);
    //$strExec->bindParam(':nombre',$this->nombre);
    //$strExec->bindParam(':apellido',$this->apellido);
    //$strExec->bindParam(':telefono',$this->telefono);
    //$strExec->bindParam(':telefono',$this->telefono);
    //$strExec->bindParam(':status',$this->status);
    $resul=$strExec->execute();
    if ($resul) {
      $res=1;
    }else{
      $res=0;
    }
    return $res;

   /*public function setregistrarNuevo(){
       return $this->registrarNuevo();
   }*/

 }//fin de registrar//


 //inicio de consultar//
public function consultar(){

  $registro="select * from proveedores";
    $consulta=$this->conex->prepare($registro);
    $resul=$consulta->execute();
   $datos=$consulta->fetchAll(PDO::FETCH_ASSOC);
   if($resul){
      return $datos;
   }else{
    return $res=0;
   }

 } //fin de consultar//

}
  
?>