<x-layout bodyClass="g-sidenav-show bg-gray-200">
    <x-navbars.sidebar activePage='dashboard'></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Dashboard"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <!-- Número de Estudiantes -->
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons opacity-10">school</i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">Número de Estudiantes</p>
                                <h4 class="mb-0">1,200</h4>
                            </div>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+5% </span>desde el mes pasado</p>
                        </div>
                    </div>
                </div>
                <!-- Número de Tutores -->
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons opacity-10">people</i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">Número de Tutores</p>
                                <h4 class="mb-0">150</h4>
                            </div>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+2% </span>desde el mes pasado</p>
                        </div>
                    </div>
                </div>
                <!-- Número de Cursos -->
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons opacity-10">class</i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">Número de Cursos</p>
                                <h4 class="mb-0">45</h4>
                            </div>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3% </span>desde el mes pasado</p>
                        </div>
                    </div>
                </div>
                <!-- Estudiantes Graduados -->
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-header p-3 pt-2">
                            <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons opacity-10">emoji_events</i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">Estudiantes Graduados</p>
                                <h4 class="mb-0">300</h4>
                            </div>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+8% </span>desde el mes pasado</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <!-- Gráfico de Rendimiento -->
                <div class="col-lg-7 mb-lg-0 mb-4">
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="row">
                                <div class="col-lg-6 col-7">
                                    <h6>Rendimiento Académico</h6>
                                    <p class="text-sm mb-0">
                                        <i class="fa fa-check text-info" aria-hidden="true"></i>
                                        <span class="font-weight-bold ms-1">70% de los estudiantes</span> tienen un promedio mayor a 8.
                                    </p>
                                </div>
                                <div class="col-lg-5 col-5 my-auto text-end">
                                    <div class="dropdown">
                                        <a class="btn bg-gradient-dark dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                            Opciones
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <li><a class="dropdown-item" href="#">Ver Detalles</a></li>
                                            <li><a class="dropdown-item" href="#">Exportar</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <div class="chart">
                                <!-- Aquí irá un gráfico, placeholder por ahora -->
                                <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Información de Eventos -->
                <div class="col-lg-5">
                    <div class="card h-100">
                        <div class="card-header pb-0">
                            <h6>Próximos Eventos</h6>
                            <p class="text-sm">
                                <i class="fa fa-calendar text-info" aria-hidden="true"></i>
                                <span class="font-weight-bold">3 eventos</span> esta semana
                            </p>
                        </div>
                        <div class="card-body p-3">
                            <ul class="list-group">
                                <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex flex-column">
                                        <h6 class="mb-1 text-dark font-weight-bold text-sm">Ceremonia de Graduación</h6>
                                        <span class="text-xs">20 de Junio, 10:00 AM</span>
                                    </div>
                                    <div class="d-flex align-items-center text-sm">
                                        <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4">Ver</button>
                                    </div>
                                </li>
                                <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex flex-column">
                                        <h6 class="mb-1 text-dark font-weight-bold text-sm">Reunión de Padres</h6>
                                        <span class="text-xs">22 de Junio, 5:00 PM</span>
                                    </div>
                                    <div class="d-flex align-items-center text-sm">
                                        <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4">Ver</button>
                                    </div>
                                </li>
                                <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                    <div class="d-flex flex-column">
                                        <h6 class="mb-1 text-dark font-weight-bold text-sm">Examen Final de Matemáticas</h6>
                                        <span class="text-xs">25 de Junio, 9:00 AM</span>
                                    </div>
                                    <div class="d-flex align-items-center text-sm">
                                        <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4">Ver</button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <x-plugins></x-plugins>
</x-layout>
