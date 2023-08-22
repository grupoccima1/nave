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
  <h2>General</h2>
                <a href="./agregar.php" class="btn btn-primary">
                Agregar registro 
                </a>
                <a href="../../index.php" class="btn btn-outline-info">
                    Regresar
                </a>
                <hr>
                <table class="table table-sm table-hover table-bordered" id="tabla">
                    <thead>
                        <th>Personalizado</th>                        
                        <th>Semana</th>
                        <th>Fecha</th>
                        <th>Beneficiario</th>
                        <th>Ingreso</th>
                        <th>Egreso</th>
                        <th>Motivo</th>
                        <th>Obra</th>
                        <th>Categoria</th>
                        <th>Sub Categoria</th>
                        <th>Modelo de negocio</th>
                        <th>Ingreso/Egreso</th>
                        <th>Forma de Pago</th>
                        <th>MES 1</th>
                        <th>Nave</th>
                        <th>Llave</th>
                        <th>MES 1</th>
                        <th>Columna O</th>
                        <th>Columna P</th>
                        <th>Año</th>
                        <th>Mes</th>
                        <th>Modificar</th>
                        <th>Eliminar</th>
                    </thead>
                    <tbody>

                        <?php
                          foreach($datos as $item) {
                        ?>
                        <tr>
                          <td class="text-center"> <?php echo $item->Personalizado; ?> </td>
                          <td class="text-center"> <?php echo $item->SEMANA;?> </td>
                          <td class="text-center"> <?php echo $item->FECHA;?> </td>
                          <td class="text-center"> <?php echo $item->BENEFICIARIO; ?> </td>
                          <td class="text-center"> <?php echo "$".number_format(floatval($item->INGRESO),2);?> </td>
                          <td class="text-center"> <?php echo "$".number_format(floatval($item->EGRESO),2);?></td>
                          <td class="text-center"> <?php echo $item->MOTIVO;?></td>
                          <td class="text-center"> <?php echo $item->OBRA; ?> </td>
                          <td class="text-center"> <?php echo $item->CATEGORIA;?> </td>
                          <td class="text-center"> <?php echo $item->SUB_CATEGORIA;?> </td>
                          <td class="text-center"> <?php echo $item->MOD_NEGOCIO;?> </td>
                          <td class="text-center"> <?php echo $item->INGRESO_EGRESO;?> </td>
                          <td class="text-center"> <?php echo $item->FORMA_DE_PAGO;?> </td>
                          <td class="text-center"> <?php echo $item->MES1;?> </td>
                          <td class="text-center"> <?php echo $item->NAVE ;?> </td>
                          <td class="text-center"> <?php echo $item->LLave;?> </td>
                          <td class="text-center"> <?php echo $item->MES_1;?> </td>
                          <td class="text-center"> <?php echo $item->column_o;?> </td>
                          <td class="text-center"> <?php echo $item->column_p;?> </td>
                          <td class="text-center"> <?php echo $item->AÑO;?> </td>
                          <td class="text-center"> <?php echo $item->MES;?> </td>
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