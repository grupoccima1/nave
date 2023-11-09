<?php

    include "./header.php"; 
    include "../../clases/Conexion.php";
    include "./crud.php"; 

    $crud = new Crud();
    $id = $_POST['id'];
    $datos = $crud->obtenerDocumento($id);
    $idMongo = $datos->_id;

?>


<div class="container">
<div class="row">
<div class="card mt-4">
  <div class="card-body">
            <div class="col">

                <a href="../../general.php" class="btn btn-outline-info">
                    Regresar
                </a>

                <h2>Actualizar Registro</h2>

                <form action="../../procesos/actualizarG.php" method="POST">
                    <input type="text" name="id" id="id" hidden value="<?php echo $idMongo ?>">
                    <label for="peronsalizado">Personalizado </label>
                    <input type="text" name="peronsalizado" id="peronsalizado" class="form-control" value="<?php echo $datos->Personalizado ?>" >
                    <label for="semana">Semana</label>
                    <input type="text" name="semana" id="semana" class="form-control" value="<?php echo $datos->SEMANA ?>">
                    <label for="fecha">fecha</label>
                    <input type="text" name="fecha" id="fecha" class="form-control" value="<?php echo $datos->FECHA ?>">
                    <label for="beneficiario">Beneficiario</label>
                    <input type="text" name="beneficiario" id="beneficiario" class="form-control" value="<?php echo $datos->BENEFICIARIO ?>">
                    <label for="Ingreso">Ingreso</label>
                    <input type="text" name="Ingreso" id="Ingreso" class="form-control" value="<?php echo $datos->INGRESO ?>">
                    <label for="egreso">Egreso</label>
                    <input type="text" name="egreso" id="egreso" class="form-control" value="<?php echo $datos->EGRESO ?>">
                    <label for="motivo">Motivo</label>
                    <input type="text" name="motivo" id="motivo" class="form-control" value="<?php echo $datos->MOTIVO ?>">
                    <label for="obra">Obra</label>
                    <input type="text" name="obra" id="obra" class="form-control" value="<?php echo $datos->OBRA ?>">
                    <label for="categoria">Categoria</label>
                    <input type="text" name="categoria" id="categoria" class="form-control" value="<?php echo $datos->CATEGORIA ?>">
                    <label for="sub_categoria">Sub Categoria</label>
                    <input type="text" name="sub_categoria" id="sub_categoria" class="form-control" value="<?php echo $datos->SUB_CATEGORIA ?>">
                    <label for="mod_negocio">Mod Negocio</label>
                    <input type="text" name="mod_negocio" id="mod_negocio" class="form-control" value="<?php echo $datos->MOD_NEGOCIO ?>">
                    <label for="ingreso_egreso">Ingreso/Egreso</label>
                    <input type="text" name="ingreso_egreso" id="ingreso_egreso" class="form-control" value="<?php echo $datos->INGRESO_EGRESO ?>">
                    <label for="forma_de_pago">Forma de Pago</label>
                    <input type="text" name="forma_de_pago" id="forma_de_pago" class="form-control" value="<?php echo $datos->FORMA_DE_PAGO ?>">
                    <label for="mes1">Mes 1</label>
                    <input type="text" name="mes1" id="mes1" class="form-control" value="<?php echo $datos->MES1 ?>">
                    <label for="Nave">Nave</label>
                    <input type="text" name="Nave" id="Nave" class="form-control" value="<?php echo $datos->NAVE ?>">
                    <label for="llave">Llave</label>
                    <input type="text" name="llave" id="llave" class="form-control" value="<?php echo $datos->LLave ?>">
                    <label for="mes_1">Mes 1 (#1)</label>
                    <input type="text" name="mes_1" id="mes_1" class="form-control" value="<?php echo $datos->MES_1 ?>">
                    <label for="column_o">Columna O</label>
                    <input type="text" name="column_o" id="column_o" class="form-control" value="<?php echo $datos->column_o ?>">
                    <label for="column_p">Columna P</label>
                    <input type="text" name="column_p" id="column_p" class="form-control" value="<?php echo $datos->column_p ?>">
                    <label for="año">Año</label>
                    <input type="text" name="año" id="año" class="form-control" value="<?php echo $datos->AÑO ?>">
                    <label for="mes">Mes</label>
                    <input type="text" name="mes" id="mes" class="form-control" value="<?php echo $datos->MES ?>">
                    <button class="btn btn-warning mt-3">
                        <i class="fa-solid fa-floppy-disk"></i> Actualizar
                    </button>
                </form>
            </div>
        </div>
    </div>
  </div>
</div>


<?php include "../../script.php"; ?>