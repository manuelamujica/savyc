<?php

require_once "modelo/unidad.php"; //requiero al modelo
$objUnidad= new Unidad;

if(isset($_POST["guardar"])){
    if(!empty($_POST["tipo_medida"]) && !empty($_POST['presentacion']) && !empty($_POST['cantidad_presentacion']) && !empty($_POST['status'])){
        
        #Instanciar los setter
        $objUnidad->setTipo($_POST["tipo_medida"]);
        $objUnidad->setPresentacion($_POST["presentacion"]);
        $objUnidad->setCantidad($_POST["cantidad_presentacion"]);
        $objUnidad->setStatus($_POST["status"]);
        
        $resul=$objUnidad->getcrearUnidad();

        if($resul == 1){
            echo    "<script>
                        alert('Registrado con éxito');
                        window.location = 'unidad';
                    </script>";
        } else {
            echo    "<script>
                        alert('¡Las unidades de medida no pueden ir vacía o llevar caracteres especiales!');
                    </script>";
        }
    } else {
        echo    "<script>
                    alert('¡Las unidades de medida no pueden ir vacía o llevar caracteres especiales!');
                </script>";
    }

}

//AQUI LLAMO PARA MOSTRAR LOS REGISTROS
$datos = $objUnidad->consultarUnidad();
$_GET['ruta']='unidad';
require_once 'plantilla.php';


