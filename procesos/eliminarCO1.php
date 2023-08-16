<?php 
    include "../clases/conexion.php";
    include "../view/Cobranza_proyeccion/crud.php";
    $crud = new Crud();
    $id = $_POST['id'];


    $respuesta = $crud->eliminar($id);

    if($respuesta->getDeletedCount()> 0){
        header("location:../view/Cobranza_proyeccion/index.php");
    }else{
        print_r($respuesta);
    }
?>