<?php
    include "../clases/Conexion.php";
    include "../view/Naves/crud.php";

    $Crud = new Crud();

    $datos = array(
        "No" => $_POST['no'],
        "CONJUNTO" => $_POST['conjunto'],
        "No_OFICIAL" => $_POST['no'],
        "NUMERO" => $_POST['numero'],
        "ETAPA" => $_POST['etapa'],
        "TIPO" => $_POST['tipo'],
        "M2" => $_POST['m2'],
        "DISPONIBILIDAD" => $_POST['disponibilidad'],
        "PERSONA_MORAL" => $_POST['persona_moral'],
        "NOMBRE" => $_POST['nombre'],
        "TELEFONO" => $_POST['telefono'],
        "CORREO" => $_POST['correo'],
        "MONTO_OPERACION" => $_POST['monto_operacion'],
        "IVA_OPERACION" => $_POST['iva_operacion'],
        "TOTAL" => $_POST['total'],
        "ENGANCHE" => $_POST['enganche'],
        "FINANCIAMIENTO" => $_POST['financiamiento'],
        "COBRADO" => $_POST['cobrado'],
        "DEUDA_CAPITAL" => $_POST['deuda_capital'],
        "MOROSIDAD" => $_POST['morosidad'],
        "FECHA_FIRMA" => $_POST['fecha_firma'],
        "FECHA_ENTREGA" => $_POST['fecha_entrega'],
        "FECHA_PRORROGA" => $_POST['fecha_prorroga'],
        "COMP_FISCAL" => $_POST['comp_fiscal'],
        "EMPRESA_QUE_FACTURA" => $_POST['empresa_factura'],
        "MESES_FINANCIADOS" => $_POST['meses_financiados'],
        "MESES_S_INTERESES" => $_POST['meses_s_intereses'],
        "MESES_C_INTERESES" => $_POST['meses_c_intereses'],
    );


    $respuesta = $Crud->insertarDatos($datos);

    if ($respuesta->getInsertedId() > 0){
        header("location:../view/Naves/index.php");
    } else {
        print_r($respuesta);
   }
    

?>