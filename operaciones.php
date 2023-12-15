<?php include "./header.php"; ?>
<?php
require_once "./clases/Conexion.php";
  require_once "./clases/crud.php";
  $crud = new Crud();
  $datos = $crud->mostrarDatos();
  $entregasPorConjunto = $crud->consultarEntregasPorConjunto(); 
  $vigencia = $crud->contarEstadosGarantiaPorConjunto(); 
  $usos = $crud->obtenerPorcentajePorUso();
  $cobranza = $crud->obtenerConteoPorConjuntoYEstadosCobranza();
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
                <a href="./index.php" class="nav_link activo">
                    <i class='bx bx-grid-alt nav_icon'></i>
                    <span class="nav_name">Dashboard</span>
                </a>
                <a href="./mantenimiento.php" class="nav_link">
                    <i class='bx bx-user nav_icon'></i>
                    <span class="nav_name">Mantenimiento</span>
                </a>
                <a href="./operaciones.php" class="nav_link">
                    <i class='bx bx-message-square-detail nav_icon'></i>
                    <span class="nav_name">Operaciones</span> </a>
                
                
                <a href="./cobranza1.php" class="nav_link">
                    <i class='bx bx-bookmark nav_icon'></i>
                    <span class="nav_name">Cobranza 1</span> </a>
                <a href="./naves.php" class="nav_link">
                    <i class='bx bx-folder nav_icon'></i>
                    <span class="nav_name">naves</span>
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
        <div class="row gap-2">
            <div class="col-12 mt-3 mb-3">
                <h1 class="text-blue-900">Operaciones</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-6 p-3">
                <div class="card shadow">
                    <div id="chartEntregas" class="chart p-3"> </div>
                </div>
            </div>
            <div class="col-6 p-3">
                <div class="card shadow">
                    <div id="chartGarantias" class="chart p-3"> </div>
                </div>
            </div>
        </div>
        <div class="row mt-4 ">
            <div class="col-4 p-3 ">
                <div class="card shadow ">
                    <div id="chartEstCobranza" class="chart p-3"> </div>
                </div>
            </div>
            <div class="col-8 p-3">
                <div class="card shadow">
                    <div id="chartPEVentas" class="chart p-3"> </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-6 p-3">
                <div class="card shadow">
                    <div id="chartPEIngresoR" class="chart p-3"></div>
                </div>
            </div>
            <div class="col-6 p-3">
                <div class="card shadow">
                    <div id="chartTipoUso" class="chart p-3"></div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
        </div>
    </div>
</main>
<script>
    var table = document.querySelector("#tabla");

    var dataTale = new DataTable(table);
</script>
<script>
    // Definir datos directamente en el script
    const entregasPorConjunto = <?php echo json_encode($entregasPorConjunto); ?>;
    const vigencia = <?php echo json_encode($vigencia); ?>;
    const usos = <?php echo json_encode($usos); ?>;
    const cobranza = <?php echo json_encode($cobranza); ?>;
    // Llamar a la función para inicializar el gráfico de entregas
    window.addEventListener('load', () => {
        initCharts(entregasPorConjunto, vigencia, usos, cobranza);
    });
</script>
<script src="js/operaciones.js"></script>
<?php include "./script.php"; ?>