<?php include "./header.php"; ?><?php
     require_once "../../clases/Conexion.php";
     require_once "./crud.php";
     $crud = new Crud();
    $datos = $crud->mostrarDatos();
?>


<div class="container">
<div class="row">
<div class="card mt-4">
  <div class="card-body">
            <div class="col">
                <h2>Cobranza Proyeccion</h2>
                <a href="../../agregar.php" class="btn btn-primary">
                Agregar registro 
                </a>
                <hr>
                <table class="table table-sm table-hover table-bordered" id="tabla">
                    <thead>
                        <th>No.</th>
                        <th>Conjunto</th>
                        <th>Numero</th>
                        <th>Tipo</th>
                        <th>Sub Total</th>
                        <th>Iva</th>
                        <th>Total</th>
                        <th>Cobrado</th>
                        <th>Deuda</th>
                        <th>Proyeccion</th>
                        <th>Morosidad</th>
                        <th>Estatus</th>
                        <th>Estatus Depto.</th>
                        <th>ComentariosP</th>
                    </thead>
                    <tbody>

                        <?php
                          foreach($datos as $item) {
                        ?>
                        <tr>
                          <td class="text-center"> <?php echo $item->No; ?> </td>
                          <td class="text-center"> <?php echo $item->CONJUNTO;?> </td>
                          <td class="text-center"> <?php echo $item->NUMERO;?> </td>
                          <td class="text-center"> <?php echo $item->TIPO; ?> </td>
                          <td class="text-center"> <?php echo $item->SUBTOTAL;?> </td>
                          <td class="text-center"> <?php echo $item->IVA;?> </td>
                          <td class="text-center"> <?php echo $item->TOTAL;?></td>
                          <td class="text-center"> <?php echo $item->COBRADO;?></td>
                          <td class="text-center"> <?php echo $item->DEUDA; ?> </td>
                          <td class="text-center"> <?php echo $item->PROYECCION;?> </td>
                          <td class="text-center"> <?php echo $item->MOROSIDAD;?> </td>
                          <td class="text-center"> <?php echo $item->ESTATUS;?> </td>
                          <td class="text-center"> <?php echo $item->ESTATUSDEPARTAMENTAL;?> </td>
                          <td class="text-center"> <?php echo $item->ComentariosP;?> </td>
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

<?php include "../../script.php"; ?>