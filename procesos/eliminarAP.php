<?php 
    include "../clases/conexion.php";
    include "../clases/crud.php";
    $crud = new Crud();
    $id = $_POST['id'];


    $respuesta = $crud->eliminar($id);

    if($respuesta->getDeletedCount()> 0){
        header("location:../view/Atraso_proyeccion/index.php");
    }else{
        print_r($respuesta);
    }
?>