<?php include "./header.php"; ?>


<div class="container">
<div class="row">
<div class="card mt-4">
  <div class="card-body">
            <div class="col">

                <a href="index.php" class="btn btn-outline-info">
                    Regresar
                </a>

                <h2>Nuevo Registro</h2>

                <form action="./procesos/insertar.php" method="post">
                    <label for="apaterno">Semana </label>
                    <input type="text" name="semana" id="semana" class="form-control">
                    <label for="fechan">Fecha</label>
                    <input type="date" name="fecha" id="fecha" class="form-control">
                    <label for="amaterno">Beneficiario</label>
                    <input type="text" name="beneficiario" id="beneficiario" class="form-control">
                    <label for="nombre">Ingreso</label>
                    <input type="text" name="ingreso" id="ingreso" class="form-control">
                    <label for="nombre">Egreso</label>
                    <input type="text" name="egreso" id="egreso" class="form-control">
                    <label for="nombre">Motivo</label>
                    <input type="text" name="motivo" id="motivo" class="form-control">
                    <label for="nombre">Obra</label>
                    <input type="text" name="obra" id="obra" class="form-control">
                    <label for="nombre">Categoria</label>
                    <input type="text" name="categoria" id="categoria" class="form-control">
                    <label for="nombre">Subcategoria</label>
                    <input type="text" name="subcat" id="subcat" class="form-control">
                    <label for="nombre">Modelo de negocios</label>
                    <input type="text" name="modelon" id="modelon" class="form-control">
                    <label for="nombre">Ingreso / Egreso</label>
                    <input type="text" name="ineg" id="ineg" class="form-control">
                    <label for="nombre">Forma de pago</label>
                    <input type="text" name="fpago" id="fpago" class="form-control">
                    <label for="nombre">Mes 1</label>
                    <input type="date" name="mes1" id="mes1" class="form-control">
                    <label for="nombre">Nave</label>
                    <input type="text" name="nave" id="nave" class="form-control">
                    <button class="btn btn-primary mt-3">
                        Agregar
                    </button>
                </form>
            </div>
        </div>
    </div>
  </div>
</div>


<?php include "./script.php"; ?>