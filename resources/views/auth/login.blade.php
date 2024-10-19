@extends('layouts.app')

@section('content')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

    <div class="min-h-screen flex items-center justify-center bg-gray-50">
        <div class="w-full max-w-md p-8 space-y-6 bg-white shadow-xl rounded-lg">
            <div class="flex justify-center">
                <img src="{{ asset('img/icon.png') }}" alt="Logo" class="h-12 w-auto">
            </div>

            <h2 class="text-2xl font-bold text-center text-gray-800">{{ __('Iniciar Sesión') }}</h2>


            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">{{ __('Correo Electrónico') }}</label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                            <i class="fas fa-envelope text-gray-400"></i>
                        </span>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                               class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 @error('email') border-red-500 @enderror">
                    </div>

                    @error('email')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">{{ __('Contraseña') }}</label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                            <i class="fas fa-lock text-gray-400"></i>
                        </span>
                        <input id="password" type="password" name="password" required
                               class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 @error('password') border-red-500 @enderror">
                    </div>
                    @error('password')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                </div>


                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember" type="checkbox" name="remember"
                               class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                        <label for="remember" class="ml-2 block text-sm text-gray-900">{{ __('Recordarme') }}</label>
                    </div>
                </div>

                <div>
                    <button type="submit" class="w-full py-3 px-4 bg-indigo-600 text-white font-semibold rounded-md shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-75 transition duration-150 ease-in-out">
                        {{ __('Iniciar Sesión') }}
                    </button>
                </div>
            </form>

            <div class="text-center">
                <p class="text-sm text-gray-600">¿No tienes una cuenta? <a href="{{ route('register') }}" class="text-indigo-600 hover:text-indigo-800 font-medium">{{ __('Regístrate') }}</a></p>
            </div>

            @if (session('success'))
                <div class="bg-green-500 text-white p-4 rounded shadow-md">
                    {{ session('success') }}
                </div>
            @endif
        </div>
    </div>

    <script>
        $(document).ready(function() {
            function adjustLayout() {
                if ($(window).width() < 768) {
                    $('.min-h-screen').removeClass('items-center').addClass('items-start pt-10');
                } else {
                    $('.min-h-screen').removeClass('items-start pt-10').addClass('items-center');
                }
            }

            adjustLayout();

            $(window).resize(function() {
                adjustLayout();
            });
        });
    </script>
@endsection
@vite('resources/css/app.css')
