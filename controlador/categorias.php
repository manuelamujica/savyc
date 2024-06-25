<?php

require_once "modelo/categorias.php"; //requiero al modelo
$objCategoria= new Categoria;

if(isset($_POST["guardar"])){
    if(!empty($_POST["nombre"])){
        
        #Instanciar los setter
        $objCategoria->setNombre($_POST["nombre"]);
        $resul=$objCategoria->getcrearCategoria();

        if($resul == 1){
            /*echo    "<script>
                        alert('Registrado con éxito');
                    </script>";*/
        } else {
            echo    "<script>
                        alert('¡La categoría no puede ir vacía o llevar caracteres especiales!');
                    </script>";
        }
    } else {
        echo    "<script>
                    alert('¡La categoría no puede ir vacía o llevar caracteres especiales!');
                </script>";
    }
}

$registro = $objCategoria->Consultar();
$_GET['ruta'] = 'categorias';
require_once 'plantilla.php';
