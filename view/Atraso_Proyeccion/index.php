<?php include "./header.php"; ?>
<?php
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
                <h2>Atraso Proyeccion</h2>
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
                        <th>Int. Financiamiento</th>
                        <!-- <th>Cobrado</th>
                        <th>Deuda</th> -->
                        <th>Proyeccion</th>
                        <!-- <th>Morosidad</th>
                        <th>Estatus</th> -->
                        <th>Comentarios</th>
                        <th>Columna1</th>
                        <th>Eliminar</th>
                        <th>Modificar</th>
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
                          <td class="text-center"> <?php echo "$".number_format($item->SUB_TOTAL,2);?> </td>
                          <td class="text-center"> <?php echo "$".number_format($item->IVA,2);?> </td>
                          <td class="text-center"> <?php echo "$".number_format($item->TOTAL,2);?></td>
                          <td class="text-center"> <?php echo "$".number_format($item->INT_FINANCIAMIENTO,2);?></td>
                          <!-- <td class="text-center"> <?php echo $item->COBRADO;?></td> -->
                          <!-- <td class="text-center"> <?php echo $item->DEUDA; ?> </td> -->
                          <td class="text-center"> <?php echo "$".number_format($item->PROYECCION,2);?> </td>
                          <!-- <td class="text-center"> <?php echo $item->MOROSIDAD;?> </td>
                          <td class="text-center"> <?php echo $item->ESTATUS;?> </td> -->
                          <td class="text-center"> <?php echo $item->COMENTARIOS;?> </td>
                          <td class="text-center"> <?php echo $item->Columna1;?> </td>
                          <td class="text-center"> 
                            <form action="./../../actualizar.php" method="post">
                              <button class="btn btn-warning">
                                <i class="fa-solid fa-user-pen"></i>
                              </button>
                            </form>
                          </td>
                          <td class="text-center">
                          <form action="./../../eliminar.php" method="post">
                            <input type="text" name="id" id="id"  value="<?php echo $item->_id?> " hidden>
                              <button class="btn btn-danger">
                                <i class="fa-solid fa-user-xmark"></i>
                              </button>
                            </form> 
                          </td>
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
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.1.6/js/dataTables.fixedHeader.min.js"></script> 

   
   <script src="../../public/bootstrap5/bootstrap.bundle.min.js"></script>


<!-- <?php include "../../script.php"; ?> -->