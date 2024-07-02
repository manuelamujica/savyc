<?php 
# 1) Requerir la conexion
require_once "conexion.php";

# 2) Clase que hereda de conexion
class Categoria extends Conexion{

    # 3) Atributos privados
    private $conex;
    private $nombre;
    #private $status=1;

    # 4) El constructor donde se crea un objeto de la clase conexion para instanciar el metodo conectar
    # y que pueda coectarse a la BD
    public function __construct(){
        $this->conex = new Conexion();
        $this->conex = $this->conex->conectar();
    }

# 5) GETTER Y SETTER
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