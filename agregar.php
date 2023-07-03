<?php include "./header.php"; ?>


<div class="container">
<div class="row">
<div class="card mt-4">
  <div class="card-body">
            <div class="col">

                <a href="./view/Atraso_Proyeccion/index.php" class="btn btn-outline-info">
                    Regresar
                </a>

                <h2>Nuevo Registro</h2>

                <form action="./procesos/insertar.php" method="post">
                    <label for="apaterno">Numero </label>
                    <input type="text" name="no" id="no" class="form-control">
                    <label for="fechan">Conjunto</label>
                    <input type="text" name="conjunto" id="conjunto" class="form-control">
                    <label for="amaterno">Numero</label>
                    <input type="text" name="numero" id="numero" class="form-control">
                    <label for="nombre">Tipo</label>
                    <input type="text" name="tipo" id="tipo" class="form-control">
                    <label for="nombre">Sub total</label>
                    <input type="text" name="sub_total" id="sub_total" class="form-control">
                    <label for="nombre">Iva</label>
                    <input type="text" name="iva" id="iva" class="form-control">
                    <label for="nombre">Total</label>
                    <input type="text" name="total" id="total" class="form-control">
                    <label for="nombre">Interes de Financiamiento</label>
                    <input type="text" name="int_financiamiento" id="int_financiamiento" class="form-control">
                    <label for="nombre">Cobrado</label>
                    <input type="text" name="cobrado" id="cobrado" class="form-control">
                    <label for="nombre">Deuda</label>
                    <input type="text" name="deuda" id="deuda" class="form-control">
                    <label for="nombre">Proyeccion</label>
                    <input type="text" name="proyeccion" id="proyeccion" class="form-control">
                    <label for="nombre">Morosidad</label>
                    <input type="text" name="morosidad" id="morosidad" class="form-control">
                    <label for="nombre">Estatus</label>
                    <input type="text" name="estatus" id="estatus" class="form-control">
                    <label for="nombre">Comentarios</label>
                    <input type="text" name="comentarios" id="comentarios" class="form-control">
                    <label for="nombre">Columna 1</label>
                    <input type="text" name="columna_1" id="columna_1" class="form-control">
                    <button class="btn btn-primary mt-3">
                        <i class="fa-solid fa-floppy-disk"></i> Agregar
                    </button>
                </form>
            </div>
        </div>
    </div>
  </div>
</div>


<?php include "./script.php"; ?>