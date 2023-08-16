<?php

    include "./header.php"; 
    include "../../clases/Conexion.php";
    include "./crud.php"; 

    $crud = new Crud();
    $id = $_POST['id'];
    $datos = $crud->obtenerDocumento($id);
    $idMongo = $datos->_id;

?>


<div class="container">
<div class="row">
<div class="card mt-4">
  <div class="card-body">
            <div class="col">

                <a href="./index.php" class="btn btn-outline-info">
                    Regresar
                </a>

                <h2>Actualizar Registro</h2>

                <form action="../../procesos/actualizarCO.php" method="POST">
                <input type="text" name="id" id="id" hidden value="<?php echo $idMongo ?>">
                    <label for="no">No.</label>
                    <input type="text" name="no" id="no" class="form-control" value="<?php echo $datos->No ?>">
                    <label for="conjunto">Conjunto</label>
                    <input type="text" name="conjunto" id="conjunto" class="form-control" value="<?php echo $datos->CONJUNTO ?>">
                    <label for="numero">Numero</label>
                    <input type="text" name="numero" id="numero" class="form-control" value="<?php echo $datos->NUMERO ?>">
                    <label for="tipo">Tipo</label>
                    <input type="text" name="tipo" id="tipo" class="form-control" value="<?php echo $datos->TIPO ?>">
                    <label for="sub_total">Sub total</label>
                    <input type="text" name="sub_total" id="sub_total" class="form-control" value="<?php echo -$datos->SUB_TOTAL ?>">
                    <label for="iva">Iva</label>
                    <input type="text" name="iva" id="iva" class="form-control" value="<?php echo $datos->IVA ?>">
                    <label for="total">Total</label>
                    <input type="text" name="total" id="total" class="form-control" value="<?php echo $datos->TOTAL ?>">
                    <!-- <label for="int_financiamiento">Interes de Financiamiento</label>
                    <input type="text" name="int_financiamiento" id="int_financiamiento" class="form-control"
                        value="<?php echo $datos->INT_FINANCIAMIENTO ?>"> -->
                    <label for="cobrado">Cobrado</label>
                    <input type="text" name="cobrado" id="cobrado" class="form-control" value="<?php echo $datos->COBRADO ?>">
                    <label for="deuda">Deuda</label>
                    <input type="text" name="deuda" id="deuda" class="form-control" value="<?php echo $datos->DEUDA ?>">
                    <label for="proyeccion">Proyeccion</label>
                    <input type="text" name="proyeccion" id="proyeccion" class="form-control" value="<?php echo $datos->PROYECCION ?>">
                    <label for="morosidad">Morosidad</label>
                    <input type="text" name="morosidad" id="morosidad" class="form-control" value="<?php echo $datos->MOROSIDAD ?>">
                    <label for="estatus">Estatus</label>
                    <input type="text" name="estatus" id="estatus" class="form-control" value="<?php echo $datos->ESTATUS ?>">
                    <label for="comentarios_departamentales">Comentarios Departamentales</label>
                    <input type="text" name="comentarios_departamentales" id="comentarios_departamentales" class="form-control" value="<?php echo $datos->ESTATUS_DEPARTAMENTAL ?>">
                    <label for="comentarios">Comentarios</label>
                    <input type="text" name="comentarios" id="comentarios" class="form-control" value="<?php echo $datos->ComentariosP ?>">
                    <button class="btn btn-warning mt-3">
                        <i class="fa-solid fa-floppy-disk"></i> Actualizar
                    </button>
                </form>
            </div>
        </div>
    </div>
  </div>
</div>


<?php include "../../script.php"; ?>