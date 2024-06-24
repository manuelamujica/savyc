<?php

require_once "modelo/categorias.php"; //requiero al modelo
$objCategoria= new Categoria;

if(isset($_POST["guardar"])){
    if(!empty($_POST["nuevaCategoria"])){
        
        #Instanciar los setter
        $objCategoria->setNombre($_POST["nuevaCategoria"]);
        
        $resul=$objCategoria->getcrearCategoria();

        if($resul == 1){
            echo    "<script>
                        alert('Registrado con éxito');
                        window.location = 'categorias';
                    </script>";
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

