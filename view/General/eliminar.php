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

                <a href="./General/index.php" class="btn btn-outline-info">
                    Regresar
                </a>

                <h2>Eliminar  Registro</h2>
                
                <table class="table table-bordered">
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

                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $datos->Personalizado; ?> </td>
                            <td><?php echo $datos->SEMANA;?> </td>
                            <td><?php echo $datos->FECHA;?> </td>
                            <td><?php echo $datos->BENEFICIARIO; ?> </td>
                            <td><?php echo $datos->INGRESO;?> </td>
                            <td><?php echo $datos->EGRESO;?></td>
                            <td><?php echo $datos->MOTIVO;?></td>
                            <td><?php echo $datos->OBRA; ?> </td>
                            <td><?php echo $datos->CATEGORIA;?> </td>
                            <td><?php echo $datos->SUB_CATEGORIA;?> </td>
                            <td><?php echo $datos->MOD_NEGOCIO;?> </td>
                            <td><?php echo $datos->INGRESO_EGRESO;?> </td>
                            <td><?php echo $datos->FORMA_DE_PAGO;?> </td>
                            <td><?php echo $datos->MES1;?> </td>
                            <td><?php echo $datos->NAVE ;?> </td>
                            <td><?php echo $datos->LLave;?> </td>
                            <td><?php echo $datos->MES_1;?> </td>
                            <td><?php echo $datos->column_o;?> </td>
                            <td><?php echo $datos->column_p;?> </td>
                            <td><?php echo $datos->AÑO;?> </td>
                            <td><?php echo $datos->MES;?> </td>
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
                <form action="../../procesos/eliminarG.php" method="POST">
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