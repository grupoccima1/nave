<?php include "./header.php"; ?>


<div class="container">
<div class="row">
<div class="card mt-4">
  <div class="card-body">
            <div class="col">

                <a href="./view/Atraso_Proyeccion/" class="btn btn-outline-info">
                    Regresar
                </a>

                <h2>Actualizar Registro</h2>

                <form action="" method="post">
                    <label for="apaterno">A paterno</label>
                    <input type="text" name="apaterno" id="apaterno" class="form-control">
                    <label for="amaterno">A materno</label>
                    <input type="text" name="amaterno" id="amaterno" class="form-control">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control">
                    <label for="fechan">Fecha de nacimiento</label>
                    <input type="date" name="fechan" id="fechan" class="form-control">
                    <button class="btn btn-warning mt-3">
                        Actualizar
                    </button>
                </form>
            </div>
        </div>
    </div>
  </div>
</div>


<?php include "./script.php"; ?>