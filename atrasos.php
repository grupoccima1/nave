<?php include "./header.php"; ?>
<?php
require_once "./clases/Conexion.php";
  require_once "./view/Atraso_Proyeccion/crud.php";
  $crud = new Crud();
  $datos = $crud->mostrarDatos();
?>

<header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav_main">
            <div>
                <a href="#" class="nav_logo">
                    <img src="./public/img/icons/n_icon.svg" alt="" style="width: 20px;">
                    <span class="nav_logo-name">Navetec</span>
                </a>
                <div class="nav_list">
                    <a href="./index.php" class="nav_link">
                        <i class='bx bx-grid-alt nav_icon'></i>
                        <span class="nav_name">Dashboard</span>
                    </a>
                    <a href="./general.php" class="nav_link">
                        <i class='bx bx-user nav_icon'></i>
                        <span class="nav_name">General</span>
                    </a>
                    <a href="./cobranza.php" class="nav_link">
                        <i class='bx bx-message-square-detail nav_icon'></i>
                        <span class="nav_name">Cobranza</span> </a>
                    <a href="./cobranza1.php" class="nav_link">
                        <i class='bx bx-bookmark nav_icon'></i>
                        <span class="nav_name">Cobranza 1</span> </a>
                    <a href="./naves.php" class="nav_link">
                        <i class='bx bx-folder nav_icon'></i>
                        <span class="nav_name">Naves</span>
                    </a>
                    <a href="./atrasos.php" class="nav_link activo">
                        <i class='bx bx-bar-chart-alt-2 nav_icon'></i>
                        <span class="nav_name">Atrasos</span>
                    </a>
                </div>
            </div> <a href="./login.php" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span
                    class="nav_name">SignOut</span> </a>
        </nav>
    </div>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 mt-3 mb-3">
                    <h1 class="text-blue-900">Atrasos </h1>
                    <a href="./view/Atraso_Proyeccion/agregar.php" class="btn btn-primary">
                        Agregar registro 
                    </a>
                </div>
            </div>
            <div class="row">
              <div class="col-12">
              <table class="table table-sm table-hover table-bordered" id="tabla">
                    <thead class="bg-blue-900 text-white">
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
                        <th>Modificar</th>
                        <th>Eliminar</th>
                    </thead>
                    <tbody>

                        <?php
                          foreach($datos as $item) {
                        ?>
                        <tr>
                          <td class="text-center"> <?php echo number_format($item->No,0); ?> </td>
                          <td class="text-center"> <?php echo $item->CONJUNTO;?> </td>
                          <td class="text-center"> <?php echo $item->NUMERO;?> </td>
                          <td class="text-center"> <?php echo $item->TIPO; ?> </td>
                          <td class="text-center"> <?php echo "$".number_format($item->SUB_TOTAL,2);?> </td>
                          <td class="text-center"> <?php echo "$".number_format($item->IVA,2);?> </td>
                          <td class="text-center"> <?php echo "$".number_format($item->TOTAL,2);?></td>
                          <td class="text-center"> <?php echo "$".number_format($item->INT_FINANCIAMIENTO,2);?></td>
                          <td class="text-center"> <?php echo "$".number_format($item->PROYECCION,2);?> </td>
                          <td class="text-center"> <?php echo $item->COMENTARIOS;?> </td>
                          <td class="text-center"> <?php echo $item->Columna1;?> </td>
                          <td class="text-center"> 
                            <form action="./view/Atraso_Proyeccion/actualizar.php" method="POST">
                            <input type="text" name="id" id="id" hidden value="<?php echo $item->_id?>">
                              <button class="btn btn-warning">
                                <i class="fa-solid fa-user-pen"></i>
                              </button>
                            </form>
                          </td>
                          <td class="text-center">
                          <form action="./view/Atraso_Proyeccion/eliminar.php" method="POST">
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
    </main>


<script>
  var table = document.querySelector("#tabla");

  var dataTale = new DataTable(table);

</script>

<?php include "./script.php"; ?>