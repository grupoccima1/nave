<?php
   include "../clases/Conexion.php";
   include "../view/Naves/crud.php";

    $Crud = new Crud();
    $id = $_POST['id'];
    

    $datos = array(
        "No" => $_POST['no'],
        "CONJUNTO" => $_POST['conjunto'],
        "No_OFICIAL" => $_POST['no_oficial'],
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
        "MES_S_INTERES" => $_POST['meses_s_interes'],
        "MES_C_INTERES" => $_POST['meses_c_interes'],
        "INICIO_MENSUALIDADES" => $_POST['inicio_mensualidades'],
        "TERMINO_MENSUALIDES" => $_POST['termino_mensualidades'],
        "COMISION" => $_POST['comision'],
        "ESTATUS_COMISION" => $_POST['estatus_comision'],
        "ASESOR" => $_POST['asesor'],
        "ENTREGA_REAL" => $_POST['entrega_real'],
        "ESTATUS_ENTREGA" => $_POST['estatus_entrega'],
        "GARANTIA" => $_POST['garantia'],
        "VIGENCIA_GARANTIA" => $_POST['vigencia_garantia'],
        "ESTATUS_GARANTIA" => $_POST['estatus_garantia'],
        "CXM2" => $_POST['cxm2'],
        "COSTO" => $_POST['costo'],
        "FECHA_INICIO_PAGO_MTTO" => $_POST['fecha_inicio_pago_mtto'],
        "DUENO_ACTUAL_arrendador" => $_POST['dueno_actual'],
        "RAZON_SOCIAL_arrendador" => $_POST['razon_social'],
        "USO" => $_POST['uso'],
        "OCUPACION" => $_POST['ocupacion'],
        "EMPRESA_OCUPANTE" => $_POST['empresa_ocupante'],
        "GIRO" => $_POST['giro'],
        "OPERACION" => $_POST['operacion'],
        "DEUDA_RENTA" => $_POST['deuda_renta'],
        "DEUDA_MTTO" => $_POST['deuda_mtto'],
        "DEUDA_AGUA" => $_POST['deuda_agua'],
        "DEUDA_INTERES" => $_POST['deuda_interes'],
        "TOTAL_DEUDA" => $_POST['total_deuda'],
        "ESTATUS_COBRANZA_SERVICIOS" => $_POST['estatus_cobranza'],
        "INICIO_RENTA" => $_POST['inicio_renta'],
        "TERMINO_RENTA" => $_POST['termino_renta'],
        "PERIODO_DE_RENTA" => $_POST['periodo_renta'],
        "FECHA_DE_INCREMENTO" => $_POST['fecha_incremento'],
        "COMENTARIOS_ADICIONALES" => $_POST['comentarios'],
        "KVAS" => $_POST['kvas'],
        "COSTO_X_KVA" => $_POST['costo_kva'],
        "LLAVE_COBRANZA" => $_POST['llave_cobranza'],
        "CLAVE_CATASTRAL" => $_POST['clave_catastral'],
        "CUENTA_PREDIAL" => $_POST['cuenta_predial']
    );



    $respuesta = $Crud->actualizar($id, $datos);

    if($respuesta->getModifiedCount() > 0 || $respuesta->getMatchedCount() > 0) {
        header("location:../view/Naves/index.php");
    }else {
        print_r($respuesta);
    }
?>