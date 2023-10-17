<?php 
    include "../clases/conexion.php";
    include "../view/Naves/crud.php";
    $crud = new Crud();
    $id = $_POST['id'];


    $respuesta = $crud->eliminar($id);

    if($respuesta->getDeletedCount()> 0){
        header("location:../naves.php");
    }else{
        print_r($respuesta);
    }
?>