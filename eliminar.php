<?php 
    include "./header.php";
    include "./clases/Conexion.php";
    include "./clases/crud.php"; 

    $crud = new Crud();
    $id = $_POST['id'];

   $datos = $crud -> obtenerDocumento($id);
   echo $datos;
?>


<div class="container">
<div class="row">
<div class="card mt-4">
  <div class="card-body">
            <div class="col">

                <a href="./view/Atraso_Proyeccion/" class="btn btn-outline-info">
                    Regresar
                </a>

                <h2>Eliminar  Registro</h2>
                
                <table class="table table-bordered">
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

                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
                <hr>
                <div class="aler alert-danger" role="alert">
                    <p>¿Estas seguro de eliminar este registro?</p>
                    <p>
                        Una vez eliminado no podras recuperarlo
                    </p>
                </div>
                <form action="" method="post">
                    <button class="btn btn-danger">
                        Eliminar
                    </button>                
                </form>
            </div>
        </div>
    </div>
  </div>
</div>


<?php include "./script.php"; ?>