<?php include "./header.php"; ?>
<?php
require_once "./clases/Conexion.php";
  require_once "./clases/crud.php";
  $crud = new Crud();
  $datos = $crud->mostrarDatosnaves();
?>


<div class="container">
<div class="row">
<div class="card mt-4">
  <div class="card-body">
            <div class="col">
                <h2>Naves</h2>
                <!-- <a href="./agregar.php" class="btn btn-primary">
                Agregar registro 
                </a> -->
                <a href="index.php" class="btn btn-outline-info">
                    Regresar
                </a>
                <hr>
                <table class="table table-sm table-hover table-bordered" id="tabla">
                    <thead>
                        <th>No</th>                        
                        <th>Conjunto</th>
                        <th>Numero</th>
                        <th>Etapa</th>
                        <th>Tipo</th>
                        <th>M2</th>
                        <th>Disponibilidad</th>
                        <th>Nombre</th>
                        <th>Telefono</th>
                        <th>Correo</th>
                        <th>Total</th>
                        <th>Enganche</th>
                        <th>Financiamiento</th>
                        <th>Cobrado</th>
                        <th>Morosidad</th>
                    </thead>
                    <tbody>

                        <?php
                          foreach($datos as $item) {
                        ?>
                        <tr>
                          <td class="text-center"> <?php echo $item->No; ?> </td>
                          <td class="text-center"> <?php echo $item->CONJUNTO;?> </td>
                          <td class="text-center"> <?php echo $item->NUMERO;?> </td>
                          <td class="text-center"> <?php echo $item->ETAPA; ?> </td>
                          <td class="text-center"> <?php echo "$".$item->TIPO;?> </td>
                          <td class="text-center"> <?php echo $item->M2;?></td>
                          <td class="text-center"> <?php echo $item->DISPONIBILIDAD;?></td>
                          <td class="text-center"> <?php echo $item->NOMBRE; ?> </td>
                          <td class="text-center"> <?php echo $item->TELEFONO;?> </td>
                          <td class="text-center"> <?php echo $item->CORREO;?> </td>
                          <td class="text-center"> <?php echo "$".$item->TOTAL ;?> </td>
                          <td class="text-center"> <?php echo "$".$item->ENGANCHE;?> </td>
                          <td class="text-center"> <?php echo "$".$item->FINANCIAMIENTO;?> </td>
                          <td class="text-center"> <?php echo "$".$item->COBRADO;?> </td>
                          <td class="text-center"> <?php echo "$".$item->MOROSIDAD;?> </td>
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