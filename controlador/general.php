<?php

require_once "modelo/general.php"; //requiero al modelo
$objGeneral= new General();

if(isset($_POST["guardar"])){
    if(!empty($_POST["rif"]) && !empty($_POST['nombre']) && !empty($_POST['direccion']) && !empty($_POST['descripcion'])){
        
        #Instanciar los setter
        $objGeneral->setRif($_POST["rif"]);
        $objGeneral->setNom($_POST["nombre"]);
        $objGeneral->setDir($_POST["direccion"]);
        $objGeneral->settlf($_POST["telefono"]);
        $objGeneral->setemail($_POST["email"]);
        $objGeneral->setDescri($_POST["descripcion"]);
        
        $resul=$objGeneral->getregistrar();

        if($resul == 1){
            echo    "<script>
                        alert('Registrado con éxito');
                        window.location = 'general';
                    </script>";
        } else {
            echo    "<script>
                        alert('¡Los campos no pueden ir vacios o llevar caracteres especiales!');
                    </script>";
        }
    } else {
        echo    "<script>
                    alert('¡Los campos no pueden ir vacios o llevar caracteres especiales!');
                </script>";
    }

}

$datos=$objGeneral->mostrar();
$_GET['ruta']='general';
require_once 'plantilla.php';
