<?php include "./header.php"; ?>


<div class="container">
<div class="row">
<div class="card mt-4">
  <div class="card-body">
            <div class="col">

                <a href="./index.php" class="btn btn-outline-info">
                    Regresar
                </a>

                <h2>Nuevo Registro</h2>

                <form action="../../procesos/insertarG.php" method="post">
                    <label for="peronsalizado">Personalizado </label>
                    <input type="text" name="peronsalizado" id="peronsalizado" class="form-control">
                    <label for="semana">Semana</label>
                    <input type="text" name="semana" id="semana" class="form-control">
                    <label for="fecha">fecha</label>
                    <input type="text" name="fecha" id="fecha" class="form-control">
                    <label for="beneficiario">Beneficiario</label>
                    <input type="text" name="beneficiario" id="beneficiario" class="form-control">
                    <label for="Ingreso">Ingreso</label>
                    <input type="text" name="Ingreso" id="Ingreso" class="form-control">
                    <label for="egreso">Egreso</label>
                    <input type="text" name="egreso" id="egreso" class="form-control">
                    <label for="motivo">Motivo</label>
                    <input type="text" name="motivo" id="motivo" class="form-control">
                    <label for="obra">Obra</label>
                    <input type="text" name="obra" id="obra" class="form-control">
                    <label for="categoria">Categoria</label>
                    <input type="text" name="categoria" id="categoria" class="form-control">
                    <label for="sub_categoria">Sub Categoria</label>
                    <input type="text" name="sub_categoria" id="sub_categoria" class="form-control">
                    <label for="mod_negocio">Mod Negocio</label>
                    <input type="text" name="mod_negocio" id="mod_negocio" class="form-control">
                    <label for="ingreso_egreso">Ingreso/Egreso</label>
                    <input type="text" name="ingreso_egreso" id="ingreso_egreso" class="form-control">
                    <label for="forma_de_pago">Forma de Pago</label>
                    <input type="text" name="forma_de_pago" id="forma_de_pago" class="form-control">
                    <label for="mes1">Mes 1</label>
                    <input type="text" name="mes1" id="mes1" class="form-control">
                    <label for="Nave">Nave</label>
                    <input type="text" name="Nave" id="Nave" class="form-control">
                    <label for="llave">Llave</label>
                    <input type="text" name="llave" id="llave" class="form-control">
                    <label for="mes_1">Mes 1 (#1)</label>
                    <input type="text" name="mes_1" id="mes_1" class="form-control">
                    <label for="column_o">Columna O</label>
                    <input type="text" name="column_o" id="column_o" class="form-control">
                    <label for="column_p">Columna P</label>
                    <input type="text" name="column_p" id="column_p" class="form-control">
                    <label for="año">Año</label>
                    <input type="text" name="año" id="año" class="form-control">
                    <label for="mes">Mes</label>
                    <input type="text" name="mes" id="mes" class="form-control">
                    <button class="btn btn-primary mt-3">
                        <i class="fa-solid fa-floppy-disk"></i> Agregar
                    </button>
                </form>
            </div>
        </div>
    </div>
  </div>
</div>


<?php include "../../script.php"; ?>