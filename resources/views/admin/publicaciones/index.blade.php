@extends('layouts.dash2')

@section('content')
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="logo">
                                    <h1>Publicaciones</h1>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="input-group form">
                                            <form id="globalSearchForm" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                                                <div class="input-group">
                                                    <input type="text" id="searchInput" class="form-control bg-light border-0 small" placeholder="Buscar..." aria-label="Search" aria-describedby="basic-addon2">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-primary" type="button">
                                                            <i class="bx bx-search"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="navbar navbar-inverse" role="banner">
                                    <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                                        <ul class="nav navbar-nav">
                                            <li><a href="{{ route('admin.publicaciones') }}">Publicaciones</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="page-content">
                    <div class="row"></div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel-body">
                                    @if(Session::has('message'))
                                        <div class="alert alert-primary" role="alert">
                                            {{ Session::get('message') }}
                                        </div>
                                    @endif

                                    <button type="button" class="btn btn-success mt-4 ml-3" data-toggle="modal" data-target="#createModal">Crear Publicación</button>
                                    <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="createModal">Registrar Publicación</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST" action="{{ route('admin.publicaciones.store') }}" role="form" enctype="multipart/form-data">
                                                        @csrf
                                                        @include('admin.publicaciones.frm.prt')
                                                        <button type="submit" class="btn btn-primary">Guardar</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                                        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


                                        <section class="example mt-4">
                                        <div class="table-responsive">
                                            <table id="tablapublicaciones" class="table table-striped table-bordered table-hover">
                                                <thead>
                                                <tr>
                                                    <th>Id_Publicación</th>
                                                    <th>Título</th>
                                                    <th>Descripción</th>
                                                    <th>Tipo</th>
                                                    <th>Autor</th>
                                                    <th>Fecha Creación</th>
                                                    <th>Contenido</th>
                                                    <th>Imagen</th>
                                                    <th>Acciones</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($publicaciones as $publica)
                                                    <tr>
                                                        <td class="v-align-middle">{{ $publica->id }}</td>
                                                        <td class="v-align-middle">{{ $publica->titulo }}</td>
                                                        <td class="v-align-middle">{{ $publica->descripcion }}</td>
                                                        <td class="v-align-middle">{{ $publica->desc_tipos }}</td>
                                                        <td class="v-align-middle">{{ $publica->nombre }}</td>
                                                        <td class="v-align-middle">{{ $publica->fecha_creacion }}</td>
                                                        <td class="v-align-middle">${{ $publica->contenido }}</td>
                                                        <td class="v-align-middle">
                                                            <img src="{{ asset('uploads/' . $publica->img) }}" width="30" class="img-responsive" alt="Imagen de publicación">
                                                        </td>
                                                        <td class="v-align-middle">
                                                            <form action="{{ route('admin.publicaciones.eliminar', $publica->id) }}" method="POST" class="form-horizontal" role="form" onsubmit="return confirmarEliminar()">
                                                                @method('DELETE')
                                                                @csrf
                                                                <a href="{{ route('admin.publicaciones.detalles', $publica->id) }}" class="btn btn-dark">Detalles</a>
                                                                <a href="{{ route('admin.publicaciones.actualizar', $publica->id) }}" class="btn btn-primary">Editar</a>
                                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmDelete{{ $publica->id }}">
                                                                    Eliminar
                                                                </button>
                                                                <div class="modal fade" id="confirmDelete{{ $publica->id }}" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteLabel{{ $publica->id }}" aria-hidden="true">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="confirmDeleteLabel{{ $publica->id }}">Confirmar Eliminación</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                ¿Estás seguro de que deseas eliminar esta publicación?
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                                                <button type="submit" class="btn btn-danger">Eliminar</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr>

        <footer class="text-muted mt-3 mb-3">
            <div align="center">
                Desarrollado Por Equipo Net Team
            </div>
        </footer>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#searchInput').on('keyup', function() {
                    var value = $(this).val().toLowerCase();
                    $('#tablapublicaciones tbody tr').filter(function() {
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
                    });
                });
            });
        </script>

        <style>
            .navbar-search .form-control {
                width: 400px; /* Ajusta el tamaño según sea necesario */
            }
        </style>
    </div>
@endsection
