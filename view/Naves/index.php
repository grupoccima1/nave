<?php include "./header.php"; ?><?php
     require_once "../../clases/Conexion.php";
     require_once "./crud.php";
     $crud = new Crud();
    $datos = $crud->mostrarDatosnaves();
?>

<div class="container">
<div class="row">
<div class="card mt-4">
  <div class="card-body">
            <div class="col">
                <h2>Naves</h2>
                <a href="./agregar.php" class="btn btn-primary">
                Agregar registro 
                </a>
                <a href="index.php" class="btn btn-outline-info">
                    Regresar
                </a>
                <hr>
                <table class="table table-sm table-hover table-bordered" id="tabla">
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
                        <th>Modificar</th>
                        <th>Eliminar</th>

                    </thead>
                    <tbody>

                        <?php
                          foreach($datos as $item) {
                        ?>
                        <tr>
                          <td class="text-center"> <?php echo $item->No; ?> </td>
                          <td class="text-center"> <?php echo $item->CONJUNTO;?> </td>
                          <td class="text-center"> <?php echo $item->No_OFICIAL;?> </td>
                          <td class="text-center"> <?php echo $item->NUMERO;?> </td>
                          <td class="text-center"> <?php echo $item->ETAPA; ?> </td>
                          <td class="text-center"> <?php echo $item->TIPO;?> </td>
                          <td class="text-center"> <?php echo $item->M2;?></td>
                          <td class="text-center"> <?php echo $item->DISPONIBILIDAD;?></td>
                          <td class="text-center"> <?php echo $item->PERSONA_MORAL;?> </td>
                          <td class="text-center"> <?php echo $item->NOMBRE; ?> </td>
                          <td class="text-center"> <?php echo $item->TELEFONO;?> </td>
                          <td class="text-center"> <?php echo $item->CORREO;?> </td>
                          <td class="text-center"> <?php echo "$".number_format(floatval($item->MONTO_OPERACION),2);?> </td>
                          <td class="text-center"> <?php echo "$".number_format(floatval($item->IVA_OPERACION),2);?> </td>
                          <td class="text-center"> <?php echo "$".number_format(floatval($item->TOTAL),2) ;?> </td>
                          <td class="text-center"> <?php echo "$".number_format(floatval($item->ENGANCHE),2);?> </td>
                          <td class="text-center"> <?php echo "$".number_format(floatval($item->FINANCIAMIENTO),2);?> </td>
                          <td class="text-center"> <?php echo "$".number_format(floatval($item->COBRADO),2);?> </td>
                          <td class="text-center"> <?php echo "$".number_format(floatval($item->DEUDA_CAPITAL),2);?> </td>
                          <td class="text-center"> <?php echo "$".number_format(floatval($item->MOROSIDAD),2);?> </td>
                          <td class="text-center"> <?php echo $item->FECHA_FIRMA;?> </td>
                          <td class="text-center"> <?php echo $item->FECHA_ENTREGA;?> </td>
                          <td class="text-center"> <?php echo $item->FECHA_PRORROGA;?> </td>
                          <td class="text-center"> <?php echo $item->COMP_FISCAL;?> </td>
                          <td class="text-center"> <?php echo $item->EMPRESA_QUE_FACTURA;?> </td>
                          <td class="text-center"> <?php echo $item->MESES_FINANCIADOS;?> </td>
                          <td class="text-center"> <?php echo $item->MES_S_INTERES;?> </td>
                          <td class="text-center"> <?php echo $item->MES_C_INTERES;?> </td>
                          <td class="text-center"> <?php echo $item->INICIO_MENSUALIDADES;?> </td>
                          <td class="text-center"> <?php echo $item->TERMINO_MENSUALIDES;?> </td>
                          <td class="text-center"> <?php echo "$".number_format(floatval($item->COMISION),2);?> </td>
                          <td class="text-center"> <?php echo $item->ESTATUS_COMISION;?> </td>
                          <td class="text-center"> <?php echo $item->ASESOR;?> </td>
                          <td class="text-center"> <?php echo $item->ENTREGA_REAL;?> </td>
                          <td class="text-center"> <?php echo $item->ESTATUS_ENTREGA;?> </td>
                          <td class="text-center"> <?php echo $item->GARANTIA;?> </td>
                          <td class="text-center"> <?php echo $item->VIGENCIA_GARANTIA;?> </td>
                          <td class="text-center"> <?php echo $item->ESTATUS_GARANTIA;?> </td>
                          <td class="text-center"> <?php echo $item->CXM2;?> </td>
                          <td class="text-center"> <?php echo "$".number_format(floatval($item->COSTO),2);?> </td>
                          <td class="text-center"> <?php echo $item->FECHA_INICIO_PAGO_MTTO;?> </td>
                          <td class="text-center"> <?php echo $item->DUENO_ACTUAL_arrendador;?> </td>
                          <td class="text-center"> <?php echo $item->RAZON_SOCIAL_arrendador;?> </td>
                          <td class="text-center"> <?php echo $item->USO;?> </td>
                          <td class="text-center"> <?php echo $item->OCUPACION;?> </td>
                          <td class="text-center"> <?php echo $item->EMPRESA_OCUPANTE;?> </td>
                          <td class="text-center"> <?php echo $item->GIRO;?> </td>
                          <td class="text-center"> <?php echo $item->OPERACION;?> </td>
                          <td class="text-center"> <?php echo $item->DEUDA_RENTA;?> </td>
                          <td class="text-center"> <?php echo $item->DEUDA_MTTO;?> </td>
                          <td class="text-center"> <?php echo $item->DEUDA_AGUA;?> </td>
                          <td class="text-center"> <?php echo $item->DEUDA_INTERES;?> </td>
                          <td class="text-center"> <?php echo $item->TOTAL_DEUDA;?> </td>
                          <td class="text-center"> <?php echo $item->ESTATUS_COBRANZA_SERVICIOS;?> </td>
                          <td class="text-center"> <?php echo $item->INICIO_RENTA;?> </td>
                          <td class="text-center"> <?php echo $item->TERMINO_RENTA;?> </td>
                          <td class="text-center"> <?php echo $item->PERIODO_DE_RENTA;?> </td>
                          <td class="text-center"> <?php echo $item->FECHA_DE_INCREMENTO;?> </td>
                          <td class="text-center"> <?php echo $item->COMENTARIOS_ADICIONALES;?> </td>
                          <td class="text-center"> <?php echo number_format($item->KVAS);?> </td>
                          <td class="text-center"> <?php echo $item->COSTO_X_KVA;?> </td>
                          <td class="text-center"> <?php echo $item->LLAVE_COBRANZA;?> </td>
                          <td class="text-center"> <?php echo $item->CLAVE_CATASTRAL;?> </td>
                          <td class="text-center"> <?php echo $item->CUENTA_PREDIAL;?> </td>
                          <td class="text-center">
                          <form action="./actualizar.php" method="POST">
                            <input type="text" name="id" id="id" hidden value="<?php echo $item->_id?>">
                              <button class="btn btn-warning">
                                <i class="fa-solid fa-user-pen"></i>
                              </button>
                            </form>
                          </td>
                          <td class="text-center">
                          <form action="./eliminar.php" method="POST">
                            <input type="text" name="id" id="id" hidden value="<?php echo $item->_id?>">
                              <button class="btn btn-danger">
                                <i class="fa-solid fa-user-xmark"></i>
                              </button>
                            </form> 
                          </td>
                        </tr>
                          <?php } ?> 

                    </tbody>
                </table>
            </div>
        </div>
    </div>
  </div>
</div>

<script>
  var table = document.querySelector("#tabla");

  var dataTale = new DataTable(table);

</script>

<?php include "../../script.php"; ?>