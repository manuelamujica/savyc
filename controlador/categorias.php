<?php
# 1) Requerir el modelo
require_once "modelo/categorias.php"; 

# 2) Crear un objeto 
$objCategoria= new Categoria;

# 3) Si desde la vista se envio el boton guardar
if(isset($_POST["guardar"])){
    # 4) Y si no esta vacio los campos del formulario
    if(!empty($_POST["nombre"])){
        
        # 5) Instanciar los setter
        $objCategoria->setNombre($_POST["nombre"]);

        # 6) variable para asignarle lo que retorne del metodo get
        $resul=$objCategoria->getregistrar();

        if($resul == 1){
            echo    "<script>
                        alert('Registrado con éxito');
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

# 7) Para el metodo consultar (mostrar)
$registro = $objCategoria->mostrar();
$_GET['ruta'] = 'categorias';
require_once 'plantilla.php';
