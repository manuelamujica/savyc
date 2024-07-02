<?php
require_once 'modelo/tpago.php';
$obj= new Tpago();

if(isset($_POST['registrar'])){

    if(isset($_POST['tipo_pago'])){
        //$obj->setmoneda($_POST['moneda']);
        $obj->setmetodo($_POST['tipo_pago']);

        $result=$obj->incluir();
        if($result==1){
            echo "<script>alert('registado con exito'); location='?pagina=configuracion'</script>";
        }else {
            "<script>alert('no se pudo registrar'); location='?pagina=configuracion'</script>";
        }
    }
} 

$registro=$obj->consultar();

$_GET['ruta'] = 'tpago';
require_once 'plantilla.php';


