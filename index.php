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
                <h2>Cobranza</h2>
                <a href="./agregar.php" class="btn btn-primary">
                Agregar registro 
                </a>
                <hr>
                <table class="table table-sm table-hover table-bordered" id="tabla">
                    <thead>
                        <th>Semana</th>
                        <th>Fecha</th>
                        <th>Beneficiario</th>
                        <th>Ingreso</th>
                        <th>Egreso</th>
                        <th>Motivo</th>
                        <th>Obra</th>
                        <th>Categoria</th>
                        <th>Subcategoria</th>
                        <th>Modelo de negocio</th>
                        <th>Ingreso Egreso</th>
                        <th>Forma dePago</th>
                        <th>Mes 1</th>
                        <th>Nave</th>
                    </thead>
                    <tbody>

                        <?php
                          foreach($datos as $item) {
                        ?>
                        <tr>
                          <td class="text-center"> <?php echo $item->SEMANA; ?> </td>
                          <td class="text-center"> <?php echo $item->FECHA;?> </td>
                          <td class="text-center"> <?php echo $item->BENEFICIARIO;?> </td>
                          <td class="text-center"> <?php echo $item->INGRESO; ?> </td>
                          <td class="text-center"> <?php echo $item->EGRESO;?> </td>
                          <td class="text-center"> <?php echo $item->MOTIVO;?> </td>
                          <td class="text-center"> <?php echo $item->OBRA;?></td>
                          <td class="text-center"> <?php echo $item->CATEGORIA;?></td>
                          <td class="text-center"> <?php echo $item->SUBCATEGORIA;?></td>
                          <td class="text-center"> <?php echo $item->MODNEGOCIO; ?> </td>
                          <td class="text-center"> <?php echo $item->INGRESOEGRESO;?> </td>
                          <td class="text-center"> <?php echo $item->FORMADEPAGO;?> </td>
                          <td class="text-center"> <?php echo $item->MES1;?> </td>
                          <td class="text-center"> <?php echo $item->NAVE;?> </td>
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