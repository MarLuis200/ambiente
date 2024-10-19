@vite(['resources/js/bootstrap.js'])
@vite(['resources/css/sb-admin-2.css'])
    <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

    <title>Dashboard</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body id="page-top">
<div id="wrapper">
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="home">
            <div class="flex justify-center">
                <img src="{{ asset('img/icon.png') }}" alt="Logo" class="h-12 w-auto" height="50" width="50">
            </div>
            <div class="sidebar-brand-text mx-3">Ambiente CieloRojo<sup></sup></div>
        </a>

        <hr class="sidebar-divider my-0">

        <li class="nav-item active">
            <a class="nav-link" href="/dash2">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <hr class="sidebar-divider">
        <div class="sidebar-heading">Tablas</div>

        <li class="nav-item">
            <a class="nav-link" href="/admin/personas">
                <i class="bx bxs-user"></i>
                <span>Personas</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin/publicaciones">
                <i class="bx bxs-user-account"></i>
                <span>Publicaciones</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin/proveedores">
                <i class="bx bx-grid-alt"></i>
                <span>Proveedores</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin/empleados">
                <i class="bx bx-user"></i>
                <span>Empleados</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin/puestos">
                <i class='bx bxs-pin'></i>
                <span>Puestos</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin/productos">
                <i class='bx bxs-cart'></i>
                <span>Productos</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin/ventas">
                <i class="bx bx-shopping-bag"></i>
                <span>Ventas</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin/inventario">
                <i class="bx bx-box"></i>
                <span>Inventario</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin/tipo_publicacion">
                <i class="fas fa-tags"></i>
                <span>Tipo Publicación</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/">
                <i class="bx bx-log-out"></i>
                <span>Home</span>
            </a>
        </li>

        <hr class="sidebar-divider d-none d-md-block">
    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>
            </nav>

            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                </div>

                <!-- Row with Charts -->
                <div class="row">
                    <!-- Line Chart -->
                    <div class="col-xl-6 col-lg-6">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Ventas Mensuales</h6>
                            </div>
                            <div class="card-body">
                                <div class="chart-area">
                                    <canvas id="lineChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Bar Chart -->
                    <div class="col-xl-6 col-lg-6">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Productos Vendidos</h6>
                            </div>
                            <div class="card-body">
                                <div class="chart-bar">
                                    <canvas id="barChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @yield('content')
        </div>
        <!-- End of Main Content -->
    </div>
    <!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Chart.js Initialization -->
<script>
    // Line Chart Example
    const ctxLine = document.getElementById('lineChart').getContext('2d');
    const lineChart = new Chart(ctxLine, {
        type: 'line',
        data: {
            labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio'],
            datasets: [{
                label: 'Ventas',
                data: [150, 200, 300, 250, 400, 350],
                backgroundColor: 'rgba(78, 115, 223, 0.2)',
                borderColor: 'rgba(78, 115, 223, 1)',
                borderWidth: 2
            }]
        },
        options: {
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // Bar Chart Example
    const ctxBar = document.getElementById('barChart').getContext('2d');
    const barChart = new Chart(ctxBar, {
        type: 'bar',
        data: {
            labels: ['Producto A', 'Producto B', 'Producto C', 'Producto D'],
            datasets: [{
                label: 'Cantidad Vendida',
                data: [150, 125, 300, 180],
                backgroundColor: [
                    'rgba(78, 115, 223, 0.7)',
                    'rgba(54, 185, 204, 0.7)',
                    'rgba(246, 194, 62, 0.7)',
                    'rgba(231, 74, 59, 0.7)'
                ],
                borderColor: [
                    'rgba(78, 115, 223, 1)',
                    'rgba(54, 185, 204, 1)',
                    'rgba(246, 194, 62, 1)',
                    'rgba(231, 74, 59, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
</body>
</html>
