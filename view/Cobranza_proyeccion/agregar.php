<?php include "./header.php"; ?>


<div class="container">
<div class="row">
<div class="card mt-4">
  <div class="card-body">
            <div class="col">

                <a href="../../cobranza1.php" class="btn btn-outline-info">
                    Regresar
                </a>

                <h2>Nuevo Registro</h2>

                <form action="../../procesos/insertarCO1.php" method="post">
                    <label for="llave">Llave</label>
                    <input type="text" name="llave" id="llave" class="form-control">
                    <label for="no">No </label>
                    <input type="text" name="no" id="no" class="form-control">
                    <label for="conjunto">Conjunto</label>
                    <input type="text" name="conjunto" id="conjunto" class="form-control">
                    <label for="numero">Numero</label>
                    <input type="text" name="numero" id="numero" class="form-control">
                    <label for="tipo">Tipo</label>
                    <input type="text" name="tipo" id="tipo" class="form-control">
                    <label for="sub_total">Sub total</label>
                    <input type="text" name="sub_total" id="sub_total" class="form-control">
                    <label for="iva">Iva</label>
                    <input type="text" name="iva" id="iva" class="form-control">
                    <label for="total">Total</label>
                    <input type="text" name="total" id="total" class="form-control">
                    <label for="int_financiamiento">Int financiamiento </label>
                    <input type="text" name="int_financiamiento" id="int_financiamiento" class="form-control">
                    <label for="cobrado">Cobrado</label>
                    <input type="text" name="cobrado" id="cobrado" class="form-control">
                    <label for="deuda">Deuda</label>
                    <input type="text" name="deuda" id="deuda" class="form-control">
                    <label for="proyeccion">Proyeccion</label>
                    <input type="text" name="proyeccion" id="proyeccion" class="form-control">
                    <label for="estatus">Estatus</label>
                    <input type="text" name="estatus" id="estatus" class="form-control">
                    <label for="morosidad">Morosidad</label>
                    <input type="text" name="morosidad" id="morosidad" class="form-control">
                    <label for="columna1">Columna 1</label>
                    <input type="text" name="columna1" id="columna1" class="form-control">
                    <label for="estatus_departamental">Estatus Departamental</label>
                    <input type="text" name="estatus_departamental" id="estatus_departamental" class="form-control">
                    <label for="columna17">Columna 17</label>
                    <input type="text" name="columna17" id="columna17" class="form-control">
                    <label for="comentarios">Comentarios</label>
                    <input type="text" name="comentarios" id="comentarios" class="form-control">
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