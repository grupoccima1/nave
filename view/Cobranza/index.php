<?php include "../../header.php"; ?>
<?php
     require_once "../../clases/Conexion.php";
     require_once "../../clases/crud.php";
     $crud = new Crud();
    $datos = $crud->mostrarDatos();
?>


<div class="container">
<div class="row">
<div class="card mt-4">
  <div class="card-body">
            <div class="col">
                <h2>Cobranza</h2>
                <a href="../../agregar.php" class="btn btn-primary">
                Agregar registro 
                </a>
                <hr>
                <table class="table table-sm table-hover table-bordered" id="tabla">
                    <thead>
                        <th>Llave</th>
                        <th>No.</th>
                        <th>Conjunto</th>
                        <th>Numero</th>
                        <th>Tipo</th>
                        <th>Sub Total</th>
                        <th>IVA</th>
                        <th>Total</th>
                        <th>Int. Financiamiento</th>
                        <th>Cobrado</th>
                        <th>Deuda</th>
                        <th>Proyeccion</th>
                        <th>Estatus</th>
                        <th>Morosidad</th>
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