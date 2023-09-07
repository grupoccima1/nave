<?php include "./header.php"; ?>
<?php
require_once "./clases/Conexion.php";
  require_once "./clases/crud.php";
  $crud = new Crud();
  $datos = $crud->mostrarDatosgeneral();
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
                    <a href="./general.php" class="nav_link activo">
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
                    <a href="./atrasos.php" class="nav_link">
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
                    <h1 class="text-blue-900">General</h1>
                </div>
            </div>
            <div class="row">
              <div class="col-12">
              <table class="table table-sm table-hover table-bordered" id="tabla">
                    <thead class="bg-blue-900 text-white">
                        <th>Personalizado</th>                        
                        <th>Semana </th>
                        <th>Fecha </th>
                        <th>Beneficiario </th>
                        <th>Ingreso </th>
                        <th>Egreso </th>
                        <th>Motivo </th>
                        <th>Obra </th>
                        <th>Categoria </th>
                        <th>Nave </th>
                        <th>Llave </th>
                        <th>Año </th>
                        <th>Mes </th>
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
                          <td class="text-center"> <?php echo "$".$item->INGRESO;?> </td>
                          <td class="text-center"> <?php echo "$".$item->EGRESO;?></td>
                          <td class="text-center"> <?php echo $item->MOTIVO;?></td>
                          <td class="text-center"> <?php echo $item->OBRA; ?> </td>
                          <td class="text-center"> <?php echo $item->CATEGORIA;?> </td>
                          <td class="text-center"> <?php echo $item->NAVE ;?> </td>
                          <td class="text-center"> <?php echo $item->LLave;?> </td>
                          <td class="text-center"> <?php echo $item->AÑO;?> </td>
                          <td class="text-center"> <?php echo $item->MES;?> </td>
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