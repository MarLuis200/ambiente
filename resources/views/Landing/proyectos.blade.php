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
            <li><a href="{{ route('landing.index') }}" class="transition delay-150 duration-300 ease-in-out ...">Inicio</a></li>
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
            <img src="{{ asset('img/fondo5.jpg') }}" alt="Background" class="w-full h-full object-cover ">
        </div>

        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-end justify-end p-6 md:p-10">
            <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-extrabold text-white text-right">
                Proyectos
            </h1>
        </div>
    </section>


    <section class="py-16 bg-gradient-to-r from-pink-100 via-white to-pink-100">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-extrabold text-center text-pink-500 mb-12">
                Nuestros Proyectos
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <div class="bg-white rounded-xl shadow-lg hover:shadow-2xl transition-transform transform hover:-translate-y-2 hover:scale-105 overflow-hidden">
                    <img src="{{ asset('img/proyecto1.jpg') }}" alt="Proyecto La Huella del Fuego" class="w-full h-60 md:h-80 object-cover">
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold text-pink-600 mb-3">
                            Proyecto La Huella del Fuego
                        </h3>
                        <p class="text-gray-500 leading-relaxed mb-4">
                            El manejo del fuego ha sido un impulsor del desarrollo de la humanidad, sin embargo, en las últimas décadas...
                        </p>
                        <a href="#" class="inline-block bg-pink-600 text-white font-semibold rounded-full px-4 py-2 shadow hover:bg-pink-700 transition duration-300">
                            Leer más →
                        </a>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg hover:shadow-2xl transition-transform transform hover:-translate-y-2 hover:scale-105 overflow-hidden">
                    <img src="{{ asset('img/proyecto1.jpg') }}" alt="Proyecto La Huella del Fuego" class="w-full h-60 md:h-80 object-cover">
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold text-pink-600 mb-3">
                            Proyecto La Huella del Fuego
                        </h3>
                        <p class="text-gray-500 leading-relaxed mb-4">
                            El manejo del fuego ha sido un impulsor del desarrollo de la humanidad, sin embargo, en las últimas décadas...
                        </p>
                        <a href="#" class="inline-block bg-pink-600 text-white font-semibold rounded-full px-4 py-2 shadow hover:bg-pink-700 transition duration-300">
                            Leer más →
                        </a>
                    </div>
                </div>


                <div class="bg-white rounded-xl shadow-lg hover:shadow-2xl transition-transform transform hover:-translate-y-2 hover:scale-105 overflow-hidden">
                    <img src="{{ asset('img/proyecto1.jpg') }}" alt="Taco Mazahua, entre el oro verde y la monarca" class="w-full h-60 md:h-80 object-cover">
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold text-pink-600 mb-3">
                            Taco Mazahua, entre el oro verde y la monarca
                        </h3>
                        <p class="text-gray-500 leading-relaxed mb-4">
                            El Taco Mazahua nos cuenta la historia de una comunidad indígena que se encuentra en la zona de influencia...
                        </p>
                        <a href="#" class="inline-block bg-pink-600 text-white font-semibold rounded-full px-4 py-2 shadow hover:bg-pink-700 transition duration-300">
                            Leer más →
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>



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
