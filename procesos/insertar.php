<?php
    include "../clases/Conexion.php";
    include "../clases/crud.php";

    $Crud = new Crud();

    $datos = array(
        "paterno" => $_POST['apaterno'], 
        "materno" => $_POST['amaterno'],
        "nombre" => $_POST['nombre'],
        "fecha" => $_POST['fechan']
    );


   $respuesta = $Crud -> insertarDatos($datos);

    if ($respuesta->getInsertedId() > 0) {
        header("location:../index.php");
    } else {
        print_r($respuesta);
    }
    

?>