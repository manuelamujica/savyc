<?php
require_once 'modelo/configuracion.php';
$obj= new Tpago();

if(isset($_POST['agregar'])){

    if(isset($_POST['tipo_pago']) && isset($_POST['moneda'])){
        $obj->setmoneda($_POST['moneda']);
        $obj->setmetodo($_POST['tipo_pago']);

        $result=$obj->incluir();
        if($result==1){
            echo "<script>alert('registado con exito');
                location='?pagina=configuracion'</script>";
        }else {
            "<script>alert('no se pudo registrar');
                location='?pagina=configuracion'</script>";
        }
    }
} 
$_GET['ruta'] = 'configuracion';
require_once 'plantilla.php';


