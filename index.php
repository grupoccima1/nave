<?php include "./header.php"; ?>
<?php
require_once "./clases/Conexion.php";
  require_once "./clases/crud.php";
  $crud = new Crud();
 // $datos = $crud->mostrarDatos();
  $datosNaves = $crud->consultarDatosNaves();
  $datosN = $crud->consultarPorcentajeEstados();
  $datosE = $crud->obtenerDatosPorConjuntoYEstado();
  $datosR = $crud->calcularPorcentajeVentaPorAnio();
 $datosT = $crud->calcularTotalVentaPorAnioYMes();
 $datosU = $crud->obtenerConteoPorConjuntoYDisponibilidad();
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
                <h1 class="text-blue-900">Dashboard</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-8 p-3">
                <div class="card shadow">
                    <div id="chart1" class="chart p-3"></div>
                </div>
            </div>
            <div class="col-4 p-3">
                <div class="card shadow h-100">
                    <span class="p-5">Hola Mundo</span>
                </div>
            </div>

        </div>
        <div class="row mt-4 ">
            <div class="col-8 p-3 ">
                <div class="card shadow">
                    <div id="chart3" class="chart p-3"> </div>
                </div>
            </div>
            <div class="col-4 p-3">
                <div class="card shadow">
                    <div id="chart2" class="chart p-3"></div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-5 p-3">
                <div class="card shadow">
                    <div id="chart4" class="chart p-3"></div>
                </div>
            </div>
            
            <div class="col-7 p-3">
                <div class="card shadow">
                    <div id="chart5" class="chart p-3"></div>
                </div>
            </div>
            
        </div>
        <div class="row mt-4">
            <div class="col-12 p-3">
                <div class="card shadow">
                    <div id="chart6" class="chart p-3"></div>
                </div>
            </div>
        </div>
        <div class="row mt-4 ">
            <div class="col-6  card shadow p-3">
                <div class="">
                    <div class="d-flex justify-content-between">
                        <h5 class="text-blue-900">Atrasos</h5>
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="mes-tab" data-bs-toggle="pill" data-bs-target="#mes"
                                    type="button" role="tab" aria-controls="mes" aria-selected="true">Mes</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="ano-tab" data-bs-toggle="pill" data-bs-target="#ano"
                                    type="button" role="tab" aria-controls="ano" aria-selected="false">Año</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="todo-tab" data-bs-toggle="pill" data-bs-target="#todo"
                                    type="button" role="tab" aria-controls="todo" aria-selected="false">Todo</button>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="mes" role="tabpanel" aria-labelledby="mes-tab">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Conjunto</th>
                                        <th>Numero</th>
                                        <th>Comentarios</th>
                                        <th>Proyección</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Aeropuerto</td>
                                        <td>1A</td>
                                        <td>marzo del 2022</td>
                                        <td class="fw-bold">$0.00</td>
                                    </tr>
                                    <tr>
                                        <td>Aeropuerto</td>
                                        <td>1A</td>
                                        <td>marzo del 2022</td>
                                        <td class="fw-bold">$0.00</td>
                                    </tr>
                                    <tr>
                                        <td>Aeropuerto</td>
                                        <td>1A</td>
                                        <td>marzo del 2022</td>
                                        <td class="fw-bold">$0.00</td>
                                    </tr>
                                    <tr>
                                        <td>Aeropuerto</td>
                                        <td>1A</td>
                                        <td>marzo del 2022</td>
                                        <td class="fw-bold">$0.00</td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="ano" role="tabpanel" aria-labelledby="ano-tab">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Conjunto</th>
                                        <th>Numero</th>
                                        <th>Comentarios</th>
                                        <th>Proyección</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Aeropuerto</td>
                                        <td>1A</td>
                                        <td>marzo del 2022</td>
                                        <td class="fw-bold">$0.00</td>
                                    </tr>
                                    <tr>
                                        <td>Aeropuerto</td>
                                        <td>1A</td>
                                        <td>marzo del 2022</td>
                                        <td class="fw-bold">$0.00</td>
                                    </tr>
                                    <tr>
                                        <td>Aeropuerto</td>
                                        <td>1A</td>
                                        <td>marzo del 2022</td>
                                        <td class="fw-bold">$0.00</td>
                                    </tr>
                                    <tr>
                                        <td>Aeropuerto</td>
                                        <td>1A</td>
                                        <td>marzo del 2022</td>
                                        <td class="fw-bold">$0.00</td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="todo" role="tabpanel" aria-labelledby="todo-tab">
    <table class="table">
        <thead>
            <tr>
                <th>Conjunto</th>
                <th>Numero</th>
                <th>Comentarios</th>
                <th>Proyección</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($datos as $dato){ ?>
                <tr>
                    <td><?php echo $dato['CONJUNTO']; ?></td>
                    <td><?php echo $dato['NUMERO']; ?></td>
                    <td><?php echo $dato['COMENTARIOS']; ?></td>
                    <td class="fw-bold"><?php echo '$' . number_format($dato['PROYECCION'], 2); ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <br>
            <br>
            <br>
        </div>
    </div>
</main>
<script>
    var table = document.querySelector("#tabla");

    var dataTale = new DataTable(table);
</script>
<script>
  // Definir datos directamente en el script
  const datosNaves = <?php echo json_encode($datosNaves); ?>;
  const datosN = <?php echo json_encode($datosN); ?>;
  const datosE = <?php echo json_encode($datosE); ?>;
  const datosR = <?php echo json_encode($datosR); ?>;
  const datosT = <?php echo json_encode($datosT); ?>;
  const datosU = <?php echo json_encode($datosU); ?>;
  // Llamar a la función para inicializar gráficos
  window.addEventListener('load', () => {
    initCharts(datosNaves, datosN, datosE, datosR, datosT, datosU);
    console.log(datosNaves);
console.log(datosN);
  });
</script>
<script src="js/main.js"></script> 
<?php include "./script.php"; ?>