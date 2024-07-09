<?php

require_once "modelo/categorias.php"; 

$objCategoria= new Categoria();

if(isset($_POST['buscar'])){
    $nombre=$_POST['buscar'];
    $result=$objCategoria->buscar($nombre);
    header('Content-Type: application/json');
    echo json_encode($result);
    exit;

}else if (isset($_POST['guardar'])){ 
    if(!empty($_POST["nombre"])){

        $nombre = $_POST["nombre"];
        $data=$objCategoria->buscar($nombre);

        if (!$data){
            $objCategoria->setNombre($_POST["nombre"]);
            $result=$objCategoria->getregistrar();
            
            if($result == 1){
                echo "<script>alert('Registrado con exito');
                    location = '?pagina=categorias' </script>";
            }else{
                echo "<script>alert('No se pudo registrar');
                location = '?pagina=categorias' </script>";
            }
        }else{
            echo "<script>alert('La categoría ya esta registrada');
            location = '?pagina=categorias' </script>";
        }
    }else{
    echo "<script>alert('No se permiten campos vacios');
        location = '?pagina=categorias' </script>";
    }
}




$registro = $objCategoria->mostrar();
$_GET['ruta'] = 'categorias';
require_once 'plantilla.php';
