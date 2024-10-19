@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-bold mb-6">Gestión de Personas</h1>
    <button id="openModal" class="bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700 transition duration-200">
        Agregar Persona
    </button>

    <!-- Modal -->
    <div id="modal" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden justify-center items-center">
        <div class="bg-white rounded-lg shadow-md w-full max-w-md p-6 mx-auto">
            <h2 class="text-xl font-semibold mb-4">Agregar Persona</h2>

            <form action="{{ route('personas.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label class="block text-sm font-medium mb-1">Nombre</label>
                    <input type="text" name="nombre" class="border border-gray-300 rounded-lg p-2 w-full" required>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium mb-1">Apellido Paterno</label>
                    <input type="text" name="a_p" class="border border-gray-300 rounded-lg p-2 w-full" required>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium mb-1">Apellido Materno</label>
                    <input type="text" name="a_m" class="border border-gray-300 rounded-lg p-2 w-full" required>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium mb-1">Correo</label>
                    <input type="email" name="correo" class="border border-gray-300 rounded-lg p-2 w-full" required>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium mb-1">Contraseña</label>
                    <input type="password" name="contrasenia" class="border border-gray-300 rounded-lg p-2 w-full" required>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium mb-1">Descripción</label>
                    <textarea name="descripcion" class="border border-gray-300 rounded-lg p-2 w-full" rows="4"></textarea>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium mb-1">Foto</label>
                    <input type="file" name="foto" class="border border-gray-300 rounded-lg p-2 w-full">
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium mb-1">Rol</label>
                    <select name="rol" class="border border-gray-300 rounded-lg p-2 w-full">
                        <option value="admin">Administrador</option>
                        <option value="usuario">Usuario</option>
                        <option value="editor">Editor</option>
                    </select>
                </div>

                <div class="flex justify-between">
                    <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700 transition duration-200">
                        Guardar
                    </button>
                    <button type="button" id="closeModal" class="bg-gray-400 text-white py-2 px-4 rounded hover:bg-gray-500 transition duration-200">
                        Cancelar
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Script para controlar el modal -->
    <script>
        const openModalButton = document.getElementById('openModal');
        const modal = document.getElementById('modal');
        const closeModalButton = document.getElementById('closeModal');

        openModalButton.addEventListener('click', () => {
            modal.classList.remove('hidden');
        });

        closeModalButton.addEventListener('click', () => {
            modal.classList.add('hidden');
        });

        window.addEventListener('click', (event) => {
            if (event.target === modal) {
                modal.classList.add('hidden');
            }
        });
    </script>
@endsection

