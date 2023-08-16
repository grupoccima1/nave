<?php
   include "../clases/Conexion.php";
   include "../view/Cobranza/crud.php";

    $Crud = new Crud();
    $id = $_POST['id'];

    

    $datos = array(
        "No" => $_POST['no'], 
        "CONJUNTO" => $_POST['conjunto'],
        "NUMERO" => $_POST['numero'],
        "TIPO" => $_POST['tipo'],
        "SUB_TOTAL" => $_POST['sub_total'],
        "IVA" => $_POST['iva'],
        "TOTAL" => $_POST['total'],
        "COBRADO" => $_POST['cobrado'],
        "DEUDA" => $_POST['deuda'],
        "PROYECCION" => $_POST['proyeccion'],
        "MOROSIDAD" => $_POST['morosidad'],
        "ESTATUS" => $_POST['estatus'],
        "ESTATUS_DEPARTAMENTAL" => $_POST['comentarios_departamentales'],
        "ComentariosP" => $_POST['comentarios']
    );


    $respuesta = $Crud->actualizar($id, $datos);

    if($respuesta->getModifiedCount() > 0 || $respuesta->getMatchedCount() > 0) {
        header("location:../view/Cobranza/index.php");
    }else {
        print_r($respuesta);
    }
?>