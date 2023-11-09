<?php 
    include "../clases/conexion.php";
    include "../view/General/crud.php";
    $crud = new Crud();
    $id = $_POST['id'];


    $respuesta = $crud->eliminar($id);

    if($respuesta->getDeletedCount()> 0){
        header("location:../general.php");
    }else{
        print_r($respuesta);
    }
?>