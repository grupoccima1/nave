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
                <h2>Prueba mongo</h2>
                <a href="./agregar.php" class="btn btn-primary">
                Agregar registro 
                </a>
                <hr>
                <table class="table table-sm table-hover table-bordered" id="tabla">
                    <thead>
                        <th>Semana</th>
                        <th>Fecha</th>
                        <th>Beneficiario</th>

                        <th>Motivo</th>
                        <th>Obra</th>
                        <th>Categoria</th>
       
                    </thead>
                    <tbody>

                        <?php
                          foreach($datos as $item) {
                        ?>
                        <tr>
                          <td class="text-center"> <?php echo $item->SEMANA; ?> </td>
                          <td class="text-center"> <?php echo $item->FECHA;?> </td>
                          <td class="text-center"> <?php echo $item->BENEFICIARIO;?> </td>

                          <td class="text-center"><?php echo $item->MOTIVO;?></td>
                          <td class="text-center"><?php echo $item->OBRA;?></td>
                          <td class="text-center"><?php echo $item->CATEGORIA;?></td>

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

<?php include "./script.php"; ?>