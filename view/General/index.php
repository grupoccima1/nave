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
                <a href="../../agregar.php" class="btn btn-primary">
                Agregar registro 
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
                        <th>Mod. Negocio</th>
                        <th>Inreso/Egreso</th>
                        <th>Forma de Pago</th>
                        <th>Mes1</th>
                        <th>Llave</th>
                        <th>Mes2</th>
                        <th>Column q</th>
                        <th>Column r</th>
                        <th>Año</th>
                        <th>Mes</th>
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
                          <td class="text-center"> <?php echo $item->INGRESO;?> </td>
                          <td class="text-center"> <?php echo $item->EGRESO;?> </td>
                          <td class="text-center"> <?php echo $item->MOTIVO;?></td>
                          <td class="text-center"> <?php echo $item->OBRA;?></td>
                          <td class="text-center"> <?php echo $item->CATEGORIA;?></td>
                          <td class="text-center"> <?php echo $item->SUBCATEGORIA; ?> </td>
                          <td class="text-center"> <?php echo $item->MODNEGOCIO;?> </td>
                          <td class="text-center"> <?php echo $item->INGRESOEGRESO;?> </td>
                          <td class="text-center"> <?php echo $item->FORMADEPAGO;?> </td>
                          <td class="text-center"> <?php echo $item->MES1;?> </td>
                          <td class="text-center"> <?php echo $item->NAVE;?> </td>
                          <td class="text-center"> <?php echo $item->LLave;?> </td>
                          <td class="text-center"> <?php echo $item->MES2;?> </td>
                          <td class="text-center"> <?php echo $item->column;?> </td>
                          <td class="text-center"> <?php echo $item->column2;?> </td>
                          <td class="text-center"> <?php echo $item->AÑO;?> </td>
                          <td class="text-center"> <?php echo $item->MES;?> </td>
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