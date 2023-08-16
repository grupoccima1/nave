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
                <h2>Cobranza</h2>
                <a href="./agregar.php" class="btn btn-primary">
                Agregar registro 
                </a>
                <a href="../../index.php" class="btn btn-outline-info">
                    Regresar
                </a>
                <hr>
                <table class="table table-sm table-hover table-bordered" id="tabla">
                    <thead>
                        <th>No</th>                        
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
                        <th>Estatus Departamental</th>
                        <th>ComentariosP</th>
                        <th>Modificar</th>
                        <th>Eliminar</th>
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
                          <td class="text-center"> <?php echo "$".number_format($item->SUB_TOTAL,2); ?> </td>
                          <td class="text-center"> <?php echo "$".number_format($item->IVA,2);?> </td>
                          <td class="text-center"> <?php echo "$".number_format($item->TOTAL,2);?></td>
                          <td class="text-center"> <?php echo "$".number_format($item->COBRADO,2);?></td>
                          <td class="text-center"> <?php echo "$".number_format($item->DEUDA,2); ?> </td>
                          <td class="text-center"> <?php echo "$".number_format($item->PROYECCION,2);?> </td>
                          <td class="text-center"> <?php echo "$".number_format($item->MOROSIDAD,2);?> </td>
                          <td class="text-center"> <?php echo $item->ESTATUS;?> </td>
                          <td class="text-center"> <?php echo $item->ESTATUS_DEPARTAMENTAL;?></td>
                          <td class="text-center"> <?php echo $item->ComentariosP;?> </td>
                          <td class="text-center"> 
                            <form action="./actualizar.php" method="POST">
                            <input type="text" name="id" id="id" hidden value="<?php echo $item->_id?>">
                              <button class="btn btn-warning">
                                <i class="fa-solid fa-user-pen"></i>
                              </button>
                            </form>
                          </td>
                          <td class="text-center">
                          <form action="./eliminar.php" method="POST">
                            <input type="text" name="id" id="id" hidden value="<?php echo $item->_id?>">
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

<?php include "../../script.php"; ?>