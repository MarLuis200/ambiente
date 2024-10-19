@vite(['resources/js/bootstrap.js'])
@vite(['resources/css/sb-admin-2.css'])
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
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

            <!-- Nav Item - Charts -->
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
                    <span>Tipo Publicacion</span>
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="/">
                    <i class="bx bx-log-out"></i>
                    <span>Home</span>
                </a>
            </li>

            <!-- Divider -->
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

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->


                @yield('content')


                <!-- /.container-fluid -->

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
</body>
</html>
