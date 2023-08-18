<?php include "./header.php"; ?>


<div class="container">
<div class="row">
<div class="card mt-4">
  <div class="card-body">
            <div class="col">

                <a href="./index.php" class="btn btn-outline-info">
                    Regresar
                </a>

                <h2>Nuevo Registro</h2>

                <form action="../../procesos/insertarNA.php" method="post">
                    <label for="no">No </label>
                    <input type="text" name="no" id="no" class="form-control">
                    <label for="conjunto">Conjunto</label>
                    <input type="text" name="conjunto" id="conjunto" class="form-control">
                    <label for="no_oficial">No. Oficial</label>
                    <input type="text" name="no_oficial" id="no_oficial" class="form-control">
                    <label for="numero">Numero</label>
                    <input type="text" name="numero" id="numero" class="form-control">
                    <label for="etapa">Etapa</label>
                    <input type="text" name="etapa" id="etapa" class="form-control">
                    <label for="tipo">Tipo</label>
                    <input type="text" name="tipo" id="tipo" class="form-control">
                    <label for="m2">M2</label>
                    <input type="text" name="m2" id="m2" class="form-control">
                    <label for="disponibilidad">Disponibilidad</label>
                    <input type="text" name="disponibilidad" id="disponibilidad" class="form-control">
                    <label for="persona_moral">Persona Moral</label>
                    <input type="text" name="persona_moral" id="persona_moral" class="form-control">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control">
                    <label for="telefono">Telefono</label>
                    <input type="text" name="telefono" id="telefono" class="form-control">
                    <label for="correo">Correo</label>
                    <input type="text" name="correo" id="correo" class="form-control">
                    <label for="monto_operacion">Monto Operacion</label>
                    <input type="text" name="monto_operacion" id="monto_operacion" class="form-control">
                    <label for="iva_operacion">Iva Operacion</label>
                    <input type="text" name="iva_operacion" id="iva_operacion" class="form-control">
                    <label for="total">Total</label>
                    <input type="text" name="total" id="total" class="form-control">
                    <label for="enganche">Enganche</label>
                    <input type="text" name="enganche" id="enganche" class="form-control">
                    <label for="financiamiento">Financiamiento </label>
                    <input type="text" name="financiamiento" id="financiamiento" class="form-control">
                    <label for="cobrado">Cobrado</label>
                    <input type="text" name="cobrado" id="cobrado" class="form-control">
                    <label for="deuda_capital">Deuda Capital</label>
                    <input type="text" name="deuda_capital" id="deuda_capital" class="form-control">
                    <label for="morosidad">Morosidad</label>
                    <input type="text" name="morosidad" id="morosidad" class="form-control">
                    <label for="fecha_firma">Fecha Firma</label>
                    <input type="text" name="fecha_firma" id="fecha_firma" class="form-control">
                    <label for="fecha_entrega">Fecha Entrega</label>
                    <input type="text" name="fecha_entrega" id="fecha_entrega" class="form-control">
                    <label for="fecha_prorroga">Fecha Prorroga</label>
                    <input type="text" name="fecha_prorroga" id="fecha_prorroga" class="form-control">
                    <label for="comp_fiscal">Comprobante Fiscal</label>
                    <input type="text" name="comp_fiscal" id="comp_fiscal" class="form-control">
                    <label for="empresa_factura">Empresa que Factura</label>
                    <input type="text" name="empresa_factura" id="empresa_factura" class="form-control">
                    <label for="meses_financiados">Meses Financiados</label>
                    <input type="text" name="meses_financiados" id="meses_financiados" class="form-control">
                    <label for="meses_s_intereses">Meses Sin Intereses</label>
                    <input type="text" name="meses_s_intereses" id="meses_s_intereses" class="form-control">
                    <label for="meses_c_intereses">Meses Con Intereses</label>
                    <input type="text" name="meses_c_intereses" id="meses_c_intereses" class="form-control">
                    <label for="inicio_mensualidades">Inicio Mensualidades</label>
                    <input type="text" name="inicio_mensualidades" id="inicio_mensualidades" class="form-control">
                    <label for="termino_mensualidades">Termino Mensualidades</label>
                    <input type="text" name="termino_mensualidades" id="termino_mensualidades" class="form-control">
                    <label for="Comision">Comision</label>
                    <input type="text" name="Comision" id="Comision" class="form-control">
                    <label for="estatus_comision">Estatus Comision</label>
                    <input type="text" name="estatus_comision" id="estatus_comision" class="form-control">
                    <label for="asesor">Asesor</label>
                    <input type="text" name="asesor" id="asesor" class="form-control">
                    <label for="entrega_real">Entrega Real</label>
                    <input type="text" name="entrega_real" id="entrega_real" class="form-control">
                    <label for="estatus_entrega">Estatus Entrega</label>
                    <input type="text" name="estatus_entrega" id="estatus_entrega" class="form-control">
                    <label for="garantia">Garantia</label>
                    <input type="text" name="garantia" id="garantia" class="form-control">
                    <label for="vigencia_garantia">Vigencia Garantia</label>
                    <input type="text" name="vigencia_garantia" id="vigencia_garantia" class="form-control">
                    <label for="estatus_garantia">Estatus Garantia</label>
                    <input type="text" name="estatus_garantia" id="estatus_garantia" class="form-control">
                    <label for="cxm2">CXM2</label>
                    <input type="text" name="cxm2" id="cxm2" class="form-control">
                    <label for="costo">Costo</label>
                    <input type="text" name="costo" id="costo" class="form-control">
                    <label for="fecha_inicio_pago_mtto">Fecha Inicio Pago de Mtto</label>
                    <input type="text" name="fecha_inicio_pago_mtto" id="fecha_inicio_pago_mtto" class="form-control">
                    <label for="dueno_actual">Dueño Actual</label>
                    <input type="text" name="dueno_actual" id="dueno_actual" class="form-control">
                    <label for="razon_social">Razon Social</label>
                    <input type="text" name="razon_social" id="razon_social" class="form-control">
                    <label for="uso">Uso</label>
                    <input type="text" name="uso" id="uso" class="form-control">
                    <label for="ocupacion">Ocupacion</label>
                    <input type="text" name="ocupacion" id="ocupacion" class="form-control">
                    <label for="empresa_ocupante">Empresa Ocupante</label>
                    <input type="text" name="empresa_ocupante" id="empresa_ocupante" class="form-control">
                    <label for="giro">Giro</label>
                    <input type="text" name="giro" id="giro" class="form-control">
                    <label for="operacion">Operacion</label>
                    <input type="text" name="operacion" id="operacion" class="form-control">
                    <label for="deuda_renta">Deuda Renta</label>
                    <input type="text" name="deuda_renta" id="deuda_renta" class="form-control">
                    <label for="deuda_mtto">Deuda mtto</label>
                    <input type="text" name="deuda_mtto" id="deuda_mtto" class="form-control">
                    <label for="deuda_agua">Deuda Agua</label>
                    <input type="text" name="deuda_agua" id="deuda_agua" class="form-control">
                    <label for="deuda_interes">Deuda Interes</label>
                    <input type="text" name="deuda_interes" id="deuda_interes" class="form-control">
                    <label for="total_deuda">Total Deuda</label>
                    <input type="text" name="total_deuda" id="total_deuda" class="form-control">
                    <label for="estatus_cobranza">Estatus Cobranza Servicio</label>
                    <input type="text" name="estatus_cobranza" id="estatus_cobranza" class="form-control">
                    <label for="inicio_renta">Inicio Renta</label>
                    <input type="text" name="inicio_renta" id="inicio_renta" class="form-control">
                    <label for="termino_renta">Termino Renta</label>
                    <input type="text" name="termino_renta" id="termino_renta" class="form-control">
                    <label for="periodo_renta">Periodo De Renta</label>
                    <input type="text" name="periodo_renta" id="periodo_renta" class="form-control">
                    <label for="fecha_incremento">Fecha de Incremento</label>
                    <input type="text" name="fecha_incremento" id="fecha_incremento" class="form-control">
                    <label for="comentarios">Comentarios Adicionales</label>
                    <input type="text" name="comentarios" id="comentarios" class="form-control">
                    <label for="kvas">KVAS</label>
                    <input type="text" name="kvas" id="kvas" class="form-control">
                    <label for="costo_kva">Costo por KVA</label>
                    <input type="text" name="costo_kva" id="costo_kva" class="form-control">
                    <label for="llave_cobranza">Llave Cobranza</label>
                    <input type="text" name="llave_cobranza" id="llave_cobranza" class="form-control">
                    <label for="clave_catastral">Clave Catastral</label>
                    <input type="text" name="clave_catastral" id="clave_catastral" class="form-control">
                    <label for="cuenta_predial">Cuenta Predial</label>
                    <input type="text" name="cuenta_predial" id="cuenta_predial" class="form-control">
                    <button class="btn btn-primary mt-3">
                        <i class="fa-solid fa-floppy-disk"></i> Agregar
                    </button>
                </form>
            </div>
        </div>
    </div>
  </div>
</div>


<?php include "../../script.php"; ?>