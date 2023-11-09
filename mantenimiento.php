<?php include "./header.php"; ?>
<?php
require_once "./clases/Conexion.php";
  require_once "./clases/crud.php";
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
                <h1 class="text-blue-900">Mantenimiento</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-6 p-3">
                <div class="card shadow">
                    <div  id="chartReportes" class="chart p-3"> </div>
                </div>
            </div>
            <div class="col-6 p-3">
                <div class="card shadow">
                    <div id="chartMantenimiento" class="chart p-3"> </div>
                </div>
            </div>
            <div class="col-6 p-3">
                <div class="card shadow">
                    <div id="chartArea" class="chart p-3"></div>
                </div>
            </div>
            <div class="col-6 p-3">
                <div class="card shadow">
                    <div id="chartGarantia" class="chart p-3"></div>
                </div>
            </div>
        </div>
        <div class="row">

        </div>

    </div>
</main>
<script>
    var table = document.querySelector("#tabla");

    var dataTale = new DataTable(table);
</script>
<script src="js/mantenimiento.js"></script>
<?php include "./script.php"; ?>