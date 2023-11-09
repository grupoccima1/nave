<?php
   include "../clases/Conexion.php";
   include "../view/General/crud.php";

    $Crud = new Crud();
    $id = $_POST['id'];

    

    $datos = array(
        "Personalizado" => $_POST['peronsalizado'],
        "SEMANA" => $_POST['semana'], 
        "FECHA" => $_POST['fecha'],
        "BENEFICIARIO" => $_POST['beneficiario'],
        "INGRESO" => $_POST['Ingreso'],
        "EGRESO" => $_POST['egreso'],
        "MOTIVO" => $_POST['motivo'],
        "OBRA" => $_POST['obra'],
        "CATEGORIA" => $_POST['categoria'],
        "SUB_CATEGORIA" => $_POST['sub_categoria'],
        "MOD_NEGOCIO" => $_POST['mod_negocio'],
        "INGRESO_EGRESO" => $_POST['ingreso_egreso'],
        "FORMA_DE_PAGO" => $_POST['forma_de_pago'],
        "MES1" => $_POST['mes1'],
        "NAVE" => $_POST['Nave'],
        "LLave" => $_POST['llave'],
        "MES_1" => $_POST['mes_1'],
        "column_o" => $_POST['column_o'],
        "column_p" => $_POST['column_p'],
        "AÑO" => $_POST['año'],
        "MES" => $_POST['mes']
    );


    $respuesta = $Crud->actualizar($id, $datos);

    if($respuesta->getModifiedCount() > 0 || $respuesta->getMatchedCount() > 0) {
        header("location:../general.php");
    }else {
        print_r($respuesta);
    }
?>