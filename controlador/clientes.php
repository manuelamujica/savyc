<?php
require_once 'modelo/clientes.php'; 

$objCliente = new Clientes(); 

if(isset($_POST['buscar'])){
    
    $cedula=$_POST['buscar'];

    $result=$objCliente->buscar($cedula);
    header('Content-Type: application/json');
    echo json_encode($result);
    exit;
}else if (isset($_POST['guardar'])){ 
    if(!empty($_POST["nombre"]) && !empty($_POST["apellido"]) && !empty($_POST["cedula_rif"]) && !empty($_POST["telefono"]) && !empty($_POST["direccion"]) && !empty(["email"])){
            $cedula=$_POST["cedula_rif"];
            $dato=$objCliente->buscar($cedula);
            if(!$dato){
            $objCliente->setNombre($_POST["nombre"]);
            $objCliente->setApellido($_POST["apellido"]);
            $objCliente->setCedula($_POST["cedula_rif"]);
            $objCliente->setTelefono($_POST["telefono"]);
            $objCliente->setEmail($_POST["email"]);
            $objCliente->setDireccion($_POST["direccion"]);

            $result = $objCliente->getRegistrar();
            if($result == 1){
                echo "<script>alert('Registrado con exito');
                location = '?pagina=clientes' </script>";
            }else{
                echo "<script>alert('No se pudo registrar');
                location = '?pagina=clientes' </script>";
                }
            }
    }
}else if(isset($_POST['actualizar'])){
    if(!empty($_POST["nombre"]) && !empty($_POST["apellido"]) && !empty($_POST["cedula_rif"]) && !empty($_POST["telefono"]) && !empty($_POST["direccion"]) && !empty(["email"])){

        $objCliente->setNombre($_POST["nombre"]);
        $objCliente->setApellido($_POST["apellido"]);
        $objCliente->setCedula($_POST["cedula_rif"]);
        $objCliente->setTelefono($_POST["telefono"]);
        $objCliente->setEmail($_POST["email"]);
        $objCliente->setDireccion($_POST["direccion"]);
        $objCliente->setstatus($_POST["status"]);

        $result = $objCliente->actualizar($_POST["codigo"]);
            if($result == 1){
                echo "<script>alert('se ha modificado con exito');
                location = '?pagina=clientes' </script>";
            }else{
                echo "<script>alert('No se pudo modificar');
                location = '?pagina=clientes' </script>";
                }
            }
}else if(isset($_POST['borrar'])){
    if(!empty($_POST['clienteCodigo'])){
    $result = $objCliente->eliminar($_POST["clienteCodigo"]);
        if($result == 1){
            echo "<script>alert('se ha eliminado con exito');
            location = '?pagina=clientes' </script>";
        }else{
            echo "<script>alert('No se pudo eliminar');
            location = '?pagina=clientes' </script>";
        }
    }
}

$registro = $objCliente->consultar();
$_GET['ruta'] = 'clientes';
require_once 'plantilla.php';