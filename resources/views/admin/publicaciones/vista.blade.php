@extends('Landing.layout')

@section('content')
    <main class="main-content container mx-auto my-8">

        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="mb-6">
            <ol class="breadcrumb flex items-center space-x-2 bg-white p-4 rounded-lg shadow-lg">
                <li class="breadcrumb-item">
                    <a href="/" class="text-blue-600 hover:text-blue-800 transition duration-300 ease-in-out">Inicio</a>
                </li>
                <li class="breadcrumb-item">
                    <span class="text-gray-500">/</span>
                </li>
                <li class="breadcrumb-item">
                    <a href="javascript:history.back()" class="text-blue-600 hover:text-blue-800 transition duration-300 ease-in-out">Regresar</a>
                </li>
                <li class="breadcrumb-item">
                    <span class="text-gray-500">/</span>
                </li>
            </ol>
        </nav>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <img id="zoomImage" src="{{ asset('uploads/' . $publicacion->img) }}" class="w-full object-cover" alt="{{ $publicacion->titulo }}" width="400" height="400">
            </div>

            <div>
                <h1 class="text-3xl font-semibold mb-4">{{ $publicacion->titulo }}</h1>
                <p class="text-lg mb-4">{{ $publicacion->descripcion }}</p>
                <p class="text-2xl font-bold text-red-600 mb-6">${{ number_format($publicacion->contenido, 2) }}</p>
            </div>
        </div>

    </main>
@endsection
