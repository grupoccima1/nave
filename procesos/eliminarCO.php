<?php 
    include "../clases/conexion.php";
    include "../view/Cobranza/crud.php";
    $crud = new Crud();
    $id = $_POST['id'];


    $respuesta = $crud->eliminar($id);

    if($respuesta->getDeletedCount()> 0){
        header("location:../view/Cobranza/index.php");
    }else{
        print_r($respuesta);
    }
?>