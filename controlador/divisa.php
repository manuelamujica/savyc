<?php
require_once 'modelo/divisa.php';
$obj=new Divisa();

if(isset($_POST['buscar'])){
    $nombre=$_POST['buscar'];
    $result=$obj->buscar($nombre);
    header('Content-Type: application/json');
    echo json_encode($result);
    exit;

}else if(isset($_POST['registrar'])){

    if(!$obj->buscar($_POST['nombre'])){
        $obj->setnombre($_POST['nombre']);
        $obj->setsimbolo($_POST['simbolo']);
        
        $result=$obj->incluir();
        if($result==1){
            echo "<script>alert('registado con exito');
                location='?pagina=divisa'</script>";
        }else {
            "<script>alert('no se pudo registrar');
                location='?pagina=divisa'</script>";
        }
    }
}

$consulta=$obj->consultar();
$_GET['ruta']='divisa';
require_once 'plantilla.php';