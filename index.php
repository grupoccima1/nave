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
            <div class="row">
                <div class="col-12 mt-3 mb-3">
                    <h1 class="text-blue-900">Dashboard</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-6 card shadow">
                    <div class="">
                        <canvas id="myChart"></canvas>
                    </div>
                </div>
                <div class="col-3 ">
                    <div class="card shadow p-3">
                        <h5 class="text-blue-900">Ingreso </h5>
                        <span class="kpis text-center fw-bold  fs_52 text-blue-100">400k</span>
                        <span class="up fs_22 text-center text-success fw-bold">6.8</span>
                    </div>
                    <div class="card shadow p-3 mt-2">
                        <h5 class="text-blue-900">Ingreso </h5>
                        <span class="kpis text-center fw-bold  fs_52 text-blue-100">400k</span>
                        <span class="up fs_22 text-center text-danger fw-bold">6.8</span>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card shadow p-3">
                        <h5 class="text-blue-900">Ingreso </h5>
                        <span class="kpis text-center fw-bold  fs_52 text-blue-100">400k</span>
                        <span class="up fs_22 text-center text-danger fw-bold">6.8</span>
                    </div>
                    <div class="card shadow p-3 mt-2">
                        <h5 class="text-blue-900">Ingreso </h5>
                        <span class="kpis text-center fw-bold  fs_52 text-blue-100">400k</span>
                        <span class="up fs_22 text-center text-success fw-bold">6.8</span>
                    </div>
                </div>
            </div>
            <div class="row mt-4 ">
                <div class="col-6 card shadow p-3">
                    <div class="">
                        <div class="d-flex justify-content-between">
                            <h5 class="text-blue-900">Atrasos</h5>
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link active" id="mes-tab" data-bs-toggle="pill" data-bs-target="#mes" type="button" role="tab" aria-controls="mes" aria-selected="true">Mes</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link" id="ano-tab" data-bs-toggle="pill" data-bs-target="#ano" type="button" role="tab" aria-controls="ano" aria-selected="false">Año</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link" id="todo-tab" data-bs-toggle="pill" data-bs-target="#todo" type="button" role="tab" aria-controls="todo" aria-selected="false">Todo</button>
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
                          </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card shadow p-3 ">
                        <div class="row mt-3">
                            <div class="col-6 d-flex align-items-center">
                                <h5 class="text-blue-900">Meta Mensual</h5>
                            </div>
                            <div class="col-6">
                                <img src="./public/img/content/charts/Meta_Mensual.svg" alt="">
                            </div>
    
                        </div>
                    </div>
                    <div class="card shadow p-3  mt-2">
                        <div class="row mt-3">
                            <div class="col-6 d-flex align-items-center ">
                                <h5 class="text-blue-900">Meta Anual </h5>
                            </div>
                            <div class="col-6">
                                <img src="./public/img/content/charts/Meta_Anual.svg" alt="">
                            </div>
    
                        </div>
                       
                    </div>
                </div>
                <div class="col-3">
                    <div class="card shadow p-3 ">
                        <h5 class="text-blue-900">Ocupación </h5>
                        <img class="m-2" src="./public/img/content/charts/Ocupacion.svg" alt="">
                    </div>
                </div>
    
    
            </div>
            <div class="row mt-4">
                <div class="col-6 card shadow p-3 ">
                    <h5 class="text-center text-blue-900 mb-3">Ocupación </h5>
                    <canvas id="myChart2"></canvas>
                </div>
                <div class="col-3">
                    <div class="card shadow p-3">
                        <h5 class="text-blue-900">Ocupación </h5>
                        <div class="py-3">
                            <img style="width: 60px;" src="./public/img/content/charts/Meta_Mensual.svg" alt="">
                            <span class="text-uppercase">gamma II</span>
                        </div>
                        <div class="py-3">
                            <img style="width: 60px;" src="./public/img/content/charts/Meta_Mensual.svg" alt="">
                            <span class="text-uppercase">gamma</span>
                        </div>
                        <div class="py-3">
                            <img style="width: 60px;" src="./public/img/content/charts/Meta_Mensual.svg" alt="">
                            <span class="text-uppercase">Aeropuerto</span>
                        </div>
                        <div class="py-3">
                            <img style="width: 60px;" src="./public/img/content/charts/Meta_Mensual.svg" alt="">
                            <span class="text-uppercase">pedro Escobedo</span>
                        </div>
    
                    </div>
                </div>
                <div class="col-3">
                    <div class="card shadow p-3">
                        <h5 class="pb-4 text-blue-900" class="">Ocupación </h5>
                        <div class="mt-3">
                            <span class="mb-1 fw-bold">Beta</span>
                            <div class="progress">
                                <div class="progress-bar" style="width:75%"></div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <span class="mb-1 fw-bold">Calamanda</span>
                            <div class="progress">
                                <div class="progress-bar" style="width:80%"></div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <span class="mb-1 fw-bold">Celta</span>
                            <div class="progress">
                                <div class="progress-bar" style="width:40%"></div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <span class="mb-1 fw-bold">Pedro Escobedo</span>
                            <div class="progress">
                                <div class="progress-bar" style="width:90%"></div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <span class="mb-1 fw-bold">Santa Rosa</span>
                            <div class="progress">
                                <div class="progress-bar" style="width:55%"></div>
                            </div>
                        </div>
                        <div class="mt-3 pb-2">
                            <span class="mb-1 fw-bold">Gamma II</span>
                            <div class="progress">
                                <div class="progress-bar" style="width:85%"></div>
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

<!-- 
<div class="container">
<div class="row">
<div class="card mt-4">
  <div class="card-body">
            <div class="col">
                <h2>Menu Inicial</h2>
                <a href="./view/Atraso_Proyeccion/" class="btn btn-primary">
                Atrasos 
                </a>
                <a href="./cobranza.php" class="btn btn-primary">
                Cobranza 
                </a>
                <a href="./cobranza1.php" class="btn btn-primary">
                Cobranza1 
                </a>
                <a href="./naves.php" class="btn btn-primary">
                Naves 
                </a>
                <a href="./general.php" class="btn btn-primary">
                General 
                </a>
            </div>
        </div>
    </div>
  </div>
</div> -->

<script>
  var table = document.querySelector("#tabla");

  var dataTale = new DataTable(table);

</script>

<?php include "./script.php"; ?>