<?php 
    include "../clases/conexion.php";
    include "../view/Atraso_Proyeccion/crud.php";
    $crud = new Crud();
    $id = $_POST['id'];


    $respuesta = $crud->eliminar($id);

    if($respuesta->getDeletedCount()> 0){
        header("location:../atrasos.php");
    }else{
        print_r($respuesta);
    }
?>