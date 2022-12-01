<?php
    include "../clases/Conexion.php";
    include "../clases/crud.php";

    $Crud = new Crud();

    $datos = array(
        "semana" => $_POST['semana'], 
        "fecha" => $_POST['fecha'],
        "beneficiario" => $_POST['beneficiario'],
        "ingreso" => $_POST['ingreso'],
        "egreso" => $_POST['egreso'], 
        "motivo" => $_POST['motivo'],
        "obra" => $_POST['obra'],
        "categoria" => $_POST['categoria'],
        "subcat" => $_POST['subcat'], 
        "modelon" => $_POST['modelon'],
        "ineg" => $_POST['ineg'],
        "fpago" => $_POST['fpago'],
        "mes1" => $_POST['mes1'], 
        "nave" => $_POST['nave'],
    );

   $respuesta = $Crud->insertarDatos($datos);

    if ($respuesta->getInsertedId() > 0) {
        header("location:../index.php");
    } else {
        print_r($respuesta);
   }
    

?>