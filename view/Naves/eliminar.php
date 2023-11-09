<?php 
    include "./header.php";
    include "../../clases/Conexion.php";
    include "./crud.php"; 

    $crud = new Crud();
    $id = $_POST['id'];

    $datos = $crud -> obtenerDocumento($id);
?>


<div class="container">
<div class="row">
<div class="card mt-4">
  <div class="card-body">
            <div class="col">

                <a href="../../naves.php" class="btn btn-outline-info">
                    Regresar
                </a>

                <h2>Eliminar  Registro</h2>
                
                <table class="table table-bordered">
                    <thead>
                    <th>No</th>                        
                        <th>Conjunto</th>
                        <th>No. Oficial</th>
                        <th>Numero</th>
                        <th>Etapa</th>
                        <th>Tipo</th>
                        <th>M2</th>
                        <th>Disponibilidad</th>
                        <th>Persona Moral</th>
                        <th>Nombre</th>
                        <th>Telefono</th>
                        <th>Correo</th>
                        <th>Monto operación</th>
                        <th>Iva Operació</th>
                        <th>Total</th>
                        <th>Enganche</th>
                        <th>Financiamiento</th>
                        <th>Cobrado</th>
                        <th>Deuda Capital</th>
                        <th>Morosidad</th>
                        <th>Fecha Firma</th>
                        <th>Fecha Entrega</th>
                        <th>Fecha Prorroga</th>
                        <th>Comp Fiscal</th>
                        <th>Empresa que factura</th>
                        <th>Meses Financiados</th>
                        <th>Meses Sin Intereses</th>
                        <th>Meses Con Intereses</th>
                        <th>Inicio Mensualidades</th>
                        <th>Termino Mensualidades</th>
                        <th>Comision</th>
                        <th>Estatus Comision</th>
                        <th>Asesor</th>
                        <th>Entrega Real</th>
                        <th>Estatus Entrega</th>
                        <th>Garantia</th>
                        <th>Vigencia Garantia</th>
                        <th>Estatus Garantia</th>
                        <th>CXM2</th>
                        <th>Costo</th>
                        <th>Fecha Inicio Pago de mtto</th>
                        <th>Dueño Actual</th>
                        <th>Razon Social</th>
                        <th>Uso</th>
                        <th>Ocupación</th>
                        <th>Empresa Ocupante</th>
                        <th>Giro</th>
                        <th>Operación</th>
                        <th>Deuda Renta</th>
                        <th>Deuda MTTO</th>
                        <th>Deuda Agua</th>
                        <th>Deuda Interes</th>
                        <th>Total Deuda</th>
                        <th>Estatus Cobranza Servicios</th>
                        <th>Inicio Renta</th>
                        <th>Termino Renta</th>
                        <th>Periodo de Renta</th>
                        <th>Fecha de Incremento</th>
                        <th>Comentarios Adicionales</th>
                        <th>KVA'S</th>
                        <th>Costo por KVA</th>
                        <th>Llave Cobranza</th>
                        <th>Clave Catastral</th>
                        <th>Cuenta Predial</th>

                    </thead>
                    <tbody>
                        <tr>
                            <td> <?php echo $datos->No; ?> </td>
                            <td> <?php echo $datos->CONJUNTO;?> </td>
                            <td> <?php echo $datos->No_OFICIAL;?> </td>
                            <td> <?php echo $datos->NUMERO;?> </td>
                            <td> <?php echo $datos->ETAPA; ?> </td>
                            <td> <?php echo $datos->TIPO;?> </td>
                            <td> <?php echo $datos->M2;?></td>
                            <td> <?php echo $datos->DISPONIBILIDAD;?></td>
                            <td> <?php echo $datos->PERSONA_MORAL;?> </td>
                            <td> <?php echo $datos->NOMBRE; ?> </td>
                            <td> <?php echo $datos->TELEFONO;?> </td>
                            <td> <?php echo $datos->CORREO;?> </td>
                            <td> <?php echo $datos->MONTO_OPERACION;?> </td>
                            <td> <?php echo $datos->IVA_OPERACION;?> </td>
                            <td> <?php echo $datos->TOTAL ;?> </td>
                            <td> <?php echo $datos->ENGANCHE;?> </td>
                            <td> <?php echo $datos->FINANCIAMIENTO;?> </td>
                            <td> <?php echo $datos->COBRADO;?> </td>
                            <td> <?php echo $datos->DEUDA_CAPITAL;?> </td>
                            <td> <?php echo $datos->MOROSIDAD;?> </td>
                            <td> <?php echo $datos->FECHA_FIRMA;?> </td>
                            <td> <?php echo $datos->FECHA_ENTREGA;?> </td>
                            <td> <?php echo $datos->FECHA_PRORROGA;?> </td>
                            <td> <?php echo $datos->COMP_FISCAL;?> </td>
                            <td> <?php echo $datos->EMPRESA_QUE_FACTURA;?> </td>
                            <td> <?php echo $datos->MESES_FINANCIADOS;?> </td>
                            <td> <?php echo $datos->MES_S_INTERES;?> </td>
                            <td> <?php echo $datos->MES_C_INTERES;?> </td>
                            <td> <?php echo $datos->INICIO_MENSUALIDADES;?> </td>
                            <td> <?php echo $datos->TERMINO_MENSUALIDES;?> </td>
                            <td> <?php echo $datos->COMISION;?> </td>
                            <td> <?php echo $datos->ESTATUS_COMISION;?> </td>
                            <td> <?php echo $datos->ASESOR;?> </td>
                            <td> <?php echo $datos->ENTREGA_REAL;?> </td>
                            <td> <?php echo $datos->ESTATUS_ENTREGA;?> </td>
                            <td> <?php echo $datos->GARANTIA;?> </td>
                            <td> <?php echo $datos->VIGENCIA_GARANTIA;?> </td>
                            <td> <?php echo $datos->ESTATUS_GARANTIA;?> </td>
                            <td> <?php echo $datos->CXM2;?> </td>
                            <td> <?php echo $datos->COSTO;?> </td>
                            <td> <?php echo $datos->FECHA_INICIO_PAGO_MTTO;?> </td>
                            <td> <?php echo $datos->DUENO_ACTUAL_arrendador;?> </td>
                            <td> <?php echo $datos->RAZON_SOCIAL_arrendador;?> </td>
                            <td> <?php echo $datos->USO;?> </td>
                            <td> <?php echo $datos->OCUPACION;?> </td>
                            <td> <?php echo $datos->EMPRESA_OCUPANTE;?> </td>
                            <td> <?php echo $datos->GIRO;?> </td>
                            <td> <?php echo $datos->OPERACION;?> </td>
                            <td> <?php echo $datos->DEUDA_RENTA;?> </td>
                            <td> <?php echo $datos->DEUDA_MTTO;?> </td>
                            <td> <?php echo $datos->DEUDA_AGUA;?> </td>
                            <td> <?php echo $datos->DEUDA_INTERES;?> </td>
                            <td> <?php echo $datos->TOTAL_DEUDA;?> </td>
                            <td> <?php echo $datos->ESTATUS_COBRANZA_SERVICIOS;?> </td>
                            <td> <?php echo $datos->INICIO_RENTA;?> </td>
                            <td> <?php echo $datos->TERMINO_RENTA;?> </td>
                            <td> <?php echo $datos->PERIODO_DE_RENTA;?> </td>
                            <td> <?php echo $datos->FECHA_DE_INCREMENTO;?> </td>
                            <td> <?php echo $datos->COMENTARIOS_ADICIONALES;?> </td>
                            <td> <?php echo $datos->KVAS;?> </td>
                            <td> <?php echo $datos->COSTO_X_KVA;?> </td>
                            <td> <?php echo $datos->LLAVE_COBRANZA;?> </td>
                            <td> <?php echo $datos->CLAVE_CATASTRAL;?> </td>
                            <td> <?php echo $datos->CUENTA_PREDIAL;?> </td>
                        </tr>
                    </tbody>
                </table>
                <hr>
                <div class="aler alert-danger" role="alert">
                    <p>¿Estas seguro de eliminar este registro?</p>
                    <p>
                        Una vez eliminado no podras recuperarlo
                    </p>
                </div>
                <form action="../../procesos/eliminarNA.php" method="POST">
                    <input type="text" name="id" value="<?php echo $datos->_id;?>" hidden>
                    <button class="btn btn-danger">
                        Eliminar
                    </button>                
                </form>
            </div>
        </div>
    </div>
  </div>
</div>


<?php include "../../script.php"; ?>