@extends('layouts.dash2')

@section('content')
    <!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Nube Colectiva">
    <link rel="icon" href="/img/logo_farmacia.png" />
    <meta name="theme-color" content="#000000" />

    <title>Detalles</title>

    <!-- Bootstrap -->
    @vite(['resources/js/app.js'])
</head>

<body>
<div class="container mt-5 mb-5">
    <div class="col-md-12">
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="logo">
                            <h1>Detalles del Producto</h1>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="input-group form">
                                    <!--
                                    <input type="text" class="form-control" placeholder="Buscar...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="button">Buscar</button>
                                    </span>
                                    -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="navbar navbar-inverse" role="banner">
                            <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                                <ul class="nav navbar-nav">
                                    <li><a href="{{ route('admin.publicaciones') }}">Detalles</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-md-10">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.publicaciones') }}">Publicaciones</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $publicaciones->titulo }}</li>
                        </ol>
                    </nav>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="content-box-large">
                                <div class="panel-body">
                                    @if(Session::has('message'))
                                        <div class="alert alert-primary" role="alert">
                                            {{ Session::get('message') }}
                                        </div>
                                    @endif

                                    <p class="h5">Título:</p>
                                    <p class="h6 mb-3">{{ $publicaciones->titulo }}</p>

                                    <p class="h5">Descripción:</p>
                                    <p class="h6 mb-3">{{ $publicaciones->descripcion }}</p>

                                    <p class="h5">Fecha Creación:</p>
                                    <p class="h6 mb-3">{{ $publicaciones->fecha_creacion }}</p>

                                    <p class="h5">Contenido:</p>
                                    <p class="h6 mb-3">{{ $publicaciones->contenido }}</p>

                                    <p class="h5">Imagen:</p>
                                    <img src="{{ asset('uploads/' . $publicaciones->img) }}" class="img-fluid" alt="Imagen del producto" style="max-width: 20%;">

                                </div>

                                <a href="{{ route('admin.publicaciones') }}" class="btn btn-warning mt-3">Volver</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr>

        <footer class="text-muted mt-3 mb-3">
            <div align="center">
                Desarrollado Por <a href="http://www.nubecolectiva.com" target="_blank">Equipo Net Team</a>
            </div>
        </footer>

        <script type="text/javascript">
            function confirmarEliminar() {
                return confirm("¿Estás seguro de eliminar?");
            }
        </script>
    </div>
</div>
</body>
</html>
@endsection
