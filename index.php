<?php include "./header.php"; ?>
<?php
require_once "./clases/Conexion.php";
  require_once "./clases/crud.php";
  $crud = new Crud();
  $datos = $crud->mostrarDatos();
?>


<div class="container">
<div class="row">
<div class="card mt-4">
  <div class="card-body">
            <div class="col">
                <h2>Menu Inicial</h2>
                <a href="./view/Atraso_Proyeccion/" class="btn btn-primary">
                Atrasos 
                </a>
                <a href="./cobranza.php" class="btn btn-primary">
                Cobranza 
                </a>
                <a href="./cobranza1.php" class="btn btn-primary">
                Cobranza1 
                </a>
                <a href="./naves.php" class="btn btn-primary">
                Naves 
                </a>
                <a href="./general.php" class="btn btn-primary">
                General 
                </a>
            </div>
        </div>
    </div>
  </div>
</div>

<script>
  var table = document.querySelector("#tabla");

  var dataTale = new DataTable(table);

</script>

<?php include "./script.php"; ?>