<?php
require_once 'modelo/divisa.php';
$obj=new Divisa();

if(isset($_POST['registrar'])){
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

$consulta=$obj->consultar();

$_GET['ruta']='divisa';
require_once 'plantilla.php';