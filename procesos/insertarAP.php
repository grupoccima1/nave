<?php
    include "../clases/Conexion.php";
    include "../view/Atraso_Proyeccion/crud.php";

    $Crud = new Crud();

    $datos = array(
        "No" => $_POST['no'], 
        "CONJUNTO" => $_POST['conjunto'],
        "NUMERO" => $_POST['numero'],
        "TIPO" => $_POST['tipo'],
        "SUB_TOTAL" => $_POST['subtotal'],
        "IVA" => $_POST['iva'],
        "TOTAL" => $_POST['total'],
        "INT_FINANCIAMIENTO" => $_POST['int_financiamiento'],
        "COBRADO" => $_POST['cobrado'],
        "DEUDA" => $_POST['deuda'],
        "PROYECCION" => $_POST['proyeccion'],
        "MOROSIDAD" => $_POST['morosidad'],
        "ESTATUS" => $_POST['estatus'],
        "COMENTARIOS" => $_POST['comentarios'],
        "Columna1" => $_POST['columna_1']
    );

    $respuesta = $Crud->insertarDatos($datos);

    if ($respuesta->getInsertedId() > 0) {
        header("location:../atrasos.php");
    } else {
        print_r($respuesta);
   }
    

?>