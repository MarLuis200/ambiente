@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-bold mb-6">Personas</h1>
    <a href="{{ route('personas.create') }}" class="bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700 transition duration-200 mb-4 inline-block">
        Agregar Persona
    </a>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-md">
            <thead>
            <tr class="bg-blue-600 text-white">
                <th class="py-3 px-5 border-b">Nombre</th>
                <th class="py-3 px-5 border-b">Correo</th>
                <th class="py-3 px-5 border-b">Rol</th>
                <th class="py-3 px-5 border-b">Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($personas as $persona)
                <tr class="hover:bg-gray-100">
                    <td class="py-3 px-5 border-b">{{ $persona->nombre }} {{ $persona->a_p }} {{ $persona->a_m }}</td>
                    <td class="py-3 px-5 border-b">{{ $persona->correo }}</td>
                    <td class="py-3 px-5 border-b">{{ $persona->rol }}</td>
                    <td class="py-3 px-5 border-b">
                        <a href="{{ route('personas.edit', $persona->id) }}" class="text-blue-600 hover:text-blue-800 mr-2">Editar</a>
                        <form action="{{ route('personas.destroy', $persona->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-800">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
