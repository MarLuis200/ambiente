<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/css/styles.css')
    @vite('resources/js/script.js')

    <title>Ambiente Cielo Rojo</title>
</head>
<body class="text-gray-800">
<header id="main-header" class="bg-transparent fixed w-full z-10 transition duration-300">
    <nav class="container mx-auto flex justify-between items-center p-4 md:p-6">
        <a href="{{ route('landing.index') }}" class="text-2xl font-extrabold text-white">

        </a>
        <div class="hidden md:flex space-x-6">
            <ul class="flex space-x-6 text-white">
                <li><a href="{{ route('landing.index') }}" class="transition">Inicio</a></li>
                <li><a href="{{ route('landing.proyectos') }}" class="transition">Proyectos</a></li>
                <li><a href="{{ route('landing.blogs') }}" class="transition">Blogs</a></li>
                <li><a href="{{ route('landing.galeria') }}" class="transition">Galería De Fotos</a></li>
                <li><a href="{{ route('landing.acerca') }}" class="transition">Acerca de</a></li>
                <li><a href="{{ route('landing.quienes.somos') }}" class="transition">¿Quiénes Somos?</a></li>
                <li><a href="{{ route('landing.premios') }}" class="transition">Premios</a></li>
                <li><a href="{{ route('landing.donaciones') }}" class="transition">Donaciones</a></li>
            </ul>
        </div>
        <button class="md:hidden text-2xl text-fuchsia-700" id="menu-toggle" >
            &#9776;
        </button>
    </nav>

    <div id="mobile-menu" class="md:hidden hidden bg-white shadow-lg" >
        <ul class="space-y-4 p-6 text-black">
            <li><a href="{{ route('landing.index') }}" class="block transition">Inicio</a></li>
            <li><a href="{{ route('landing.proyectos') }}" class="block transition">Proyectos</a></li>
            <li><a href="{{ route('landing.blogs') }}" class="block transition">Blogs</a></li>
            <li><a href="{{ route('landing.galeria') }}" class="block transition">Galería De Fotos</a></li>
            <li><a href="{{ route('landing.acerca') }}" class="block transition">Acerca de</a></li>
            <li><a href="{{ route('landing.quienes.somos') }}" class="block transition">¿Quiénes Somos?</a></li>
            <li><a href="{{ route('landing.premios') }}" class="block transition">Premios</a></li>
            <li><a href="{{ route('landing.donaciones') }}" class="block transition">Donaciones</a></li>
        </ul>
    </div>
</header>

<main class="relative">
    <section class="h-screen bg-black relative">
        <div class="absolute inset-0">
            <img src="{{ asset('img/fondo4.jpg') }}" alt="Background" class="w-full h-full object-cover ">
        </div>

        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-end justify-end p-6 md:p-10">
            <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-extrabold text-white text-right">
                ¿Quiénes Somos?
            </h1>
        </div>
    </section>


    <section class="h-screen bg-white text-black py-12 flex items-center">
        <div class="w-full max-w-5xl mx-auto bg-white rounded-xl shadow-lg hover:shadow-xl overflow-hidden transition-transform transform hover:scale-105">
            <h1 class="text-2xl md:text-3xl lg:text-4xl font-semibold text-indigo-600 mb-4 text-center md:text-left">
                Ambiente Cielo Rojo
            </h1>
            <div class="md:flex h-full">
                <div class="md:w-1/2 flex justify-center items-center p-4">
                    <figure class="relative w-full transition-all duration-300 cursor-pointer filter grayscale hover:grayscale-0">
                        <a href="#">
                            <img class="rounded-lg w-full h-full object-cover" src="{{ asset('img/cielo.png') }}" alt="Ambiente">
                        </a>
                    </figure>
                </div>
                <div class="md:w-1/2 p-8 flex flex-col justify-center">
                    <div class="uppercase tracking-wide text-sm text-indigo-500">Investigación y Cultura</div>
                    <p class="mt-2 text-slate-500 text-justify">
                        Investigación y Comunicación Audiovisual: Medio Ambiente y Cultura. Nuestro proyecto se enfoca en la preservación del entorno natural y la promoción de la diversidad cultural.
                    </p>
                    <p class="mt-4 text-slate-500 text-justify">
                        Desde la creación de Proyectos hasta la organización de eventos de concientización, nuestro objetivo es inspirar a la comunidad para proteger nuestro planeta.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <img class="rounded-lg w-full h-full object-cover" src="{{ asset('img/laureles.jpg') }}" alt="Ambiente">

    <footer class="bg-gray-900 text-white py-6">
        <div class="max-w-5xl mx-auto flex flex-col md:flex-row justify-between items-center">
            <p class="text-sm">&copy; 2024 Ambiente Cielo Rojo. Todos los derechos reservados.</p>
            <div class="flex space-x-4 mt-4 md:mt-0">
                <a href="#" target="_blank"><img src="https://img.icons8.com/fluent/30/ffffff/facebook-new.png" alt="Facebook"></a>
                <a href="#" target="_blank"><img src="https://img.icons8.com/fluent/30/ffffff/linkedin-2.png" alt="LinkedIn"></a>
                <a href="#" target="_blank"><img src="https://img.icons8.com/fluent/30/ffffff/instagram-new.png" alt="Instagram"></a>
                <a href="#" target="_blank"><img src="https://img.icons8.com/fluent/30/ffffff/twitter.png" alt="Twitter"></a>
            </div>
        </div>
    </footer>
</main>
</body>
</html>
