<?php  
require_once 'modelo/proveedores.php';

$objProveedores = new Proveedor();

if (isset($_POST["registrar"])) {

    if (!empty($_POST["rif"]) && !empty($_POST["razon_social"])&& !empty($_POST["correo"]) && !empty($_POST["direccion"])) {

        $objProveedores->setRif($_POST['rif']);
        $objProveedores->setRazon_Social($_POST['razon_social']);
        $objProveedores->setcorreo($_POST['correo']);
        $objProveedores->setDireccion($_POST['direccion']);
        //$objProveedores->setStatus($_POST['status']);
        //$objProveedores->setCedula($_POST['cedula']);
        //$objProveedores->setNombre($_POST['nombre']);
        //$objProveedores->setApellido($_POST['apellido']);
        //$objProveedores->setTelefono($_POST['telefono']);
        //$objProveedores->set_Telefono($_POST['telefono']);
        //$objProveedores->setStatus($_POST['status']);
        $resul=$objProveedores->registrar();

        if ($resul ==1) {
        echo    "<script>
                        alert('Registrado con éxito');
                        window.location = 'proveedores';
                    </script>";
        } else {
            echo    "<script>
                        alert('¡La campos vacios!');
                    </script>";
        }
    } else {
        echo    "<script>
                    alert('¡intrucsca lo datos nuevamente !');
                </script>";
    }
}

$registro=$objProveedores->consultar();

$_GET['ruta']='proveedores';
require_once 'plantilla.php';

?>