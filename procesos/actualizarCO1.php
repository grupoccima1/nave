<?php
   include "../clases/Conexion.php";
   include "../view/Cobranza_proyeccion/crud.php";

    $Crud = new Crud();
    $id = $_POST['id'];

    

    $datos = array(
        "LLAVE" => $_POST['llave'],
        "No" => $_POST['no'], 
        "CONJUNTO" => $_POST['conjunto'],
        "NUMERO" => $_POST['numero'],
        "TIPO" => $_POST['tipo'],
        "SUB_TOTAL" => $_POST['sub_total'],
        "IVA" => $_POST['iva'],
        "TOTAL" => $_POST['total'],
        "INT_FINANCIAMIENTO" => $_POST['int_financiamiento'],
        "COBRADO" => $_POST['cobrado'],
        "DEUDA" => $_POST['deuda'],
        "PROYECCION" => $_POST['proyeccion'],
        "ESTATUS" => $_POST['estatus'],
        "MOROSIDAD" => $_POST['morosidad'],
        "Columna1" => $_POST['columna1'],
        "ESTATUS_DEPARTAMENTAL" => $_POST['estatus_departamental'],
        "Column17" => $_POST['columna17'],
        "COMENTARIOS" => $_POST['comentarios']
    );


    $respuesta = $Crud->actualizar($id, $datos);

    if($respuesta->getModifiedCount() > 0 || $respuesta->getMatchedCount() > 0) {
        header("location:../view/Cobranza_proyeccion/index.php");
    }else {
        print_r($respuesta);
    }
?>