<?php 
    include "./header.php";
    include "../../clases/Conexion.php";
    include "./crud.php"; 

    $crud = new Crud();
    $id = $_POST['id'];

    $datos = $crud -> obtenerDocumento($id);
?>


<div class="container">
<div class="row">
<div class="card mt-4">
  <div class="card-body">
            <div class="col">

                <a href="../../atrasos.php" class="btn btn-outline-info">
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
                        <th>Proyeccion</th>
                        <th>Comentarios</th>
                        <th>Columna1</th>

                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $datos->No;?></td>
                            <td><?php echo $datos->CONJUNTO ?></td>
                            <td><?php echo $datos->NUMERO?></td>
                            <td><?php echo $datos->TIPO?></td>
                            <td><?php echo $datos->SUB_TOTAL?></td>
                            <td><?php echo $datos->IVA?></td>
                            <td><?php echo $datos->TOTAL?></td>
                            <td><?php echo $datos->INT_FINANCIAMIENTO?></td>
                            <td><?php echo $datos->PROYECCION?></td>
                            <td><?php echo $datos->COMENTARIOS?></td>
                            <td><?php echo $datos->Columna1?></td>
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
                <form action="../../procesos/eliminarAP.php" method="POST">
                    <input type="text" name="id" value="<?php echo $datos->_id;?>" hidden>
                    <button class="btn btn-danger">
                        Eliminar
                    </button>                
                </form>
            </div>
        </div>
    </div>
  </div>
</div>


<?php include "../../script.php"; ?>