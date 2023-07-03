<?php
require_once "./clases/Conexion.php";
  require_once "./clases/crud.php";
  $crud = new Crud();
  $datos = $crud->mostrarDatos();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="" href="https://cdn.datatables.net/fixedheader/3.1.6/css/fixedHeader.dataTables.min.css">
    <link rel="stylesheet" href="./public/bootstrap5/bootstrap.min.css">
    <link rel="stylesheet" href="./public/fontawesome-free-6.2.0-web/css/all.css">
    <link rel="stylesheet" href="./public/fontawesome-free-6.2.0-web/css/all.min.css">
</head>
<body>
<div class="container">
<div class="row">
<div class="card mt-4">
  <div class="card-body">
            <div class="col">
                <h2>Historico</h2>
                <a href="./agregar.php" class="btn btn-primary">
                Agregar registro 
                </a>
                <hr>
                <table id="example" class="table table-sm table-hover table-bordered" >
                <thead>
                    <tr>
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
                    </tr>
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



<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.1.6/js/dataTables.fixedHeader.min.js"></script> 

<script>

$(document).ready(function(){
    var table = $('#example').DataTable({
       orderCellsTop: true,
       fixedHeader: true 
    });

    //Creamos una fila en el head de la tabla y lo clonamos para cada columna
    $('#example thead tr').clone(true).appendTo( '#example thead' );

    $('#example thead tr:eq(1) th').each( function (i) {
        var title = $(this).text(); //es el nombre de la columna
        $(this).html( '<input type="text" placeholder="Search...'+title+'" />' );
 
        $( 'input', this ).on( 'keyup change', function () {
            if ( table.column(i).search() !== this.value ) {
                table
                    .column(i)
                    .search( this.value )
                    .draw();
            }
        } );
    } );   
});


 

</script>
<script src="./public/bootstrap5/bootstrap.bundle.min.js"></script>

</body>
</html>