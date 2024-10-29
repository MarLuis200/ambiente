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
        <a href="{{ route('landing.index') }}" class="text-2xl font-extrabold text-white"></a>
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
        <button class="md:hidden text-2xl text-fuchsia-700" id="menu-toggle">&#9776;</button>
    </nav>

    <div id="mobile-menu" class="md:hidden hidden bg-white shadow-lg">
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
            <img src="{{ asset('img/fondo3.jpg') }}" alt="Background" class="w-full h-full object-cover">
        </div>
        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-end justify-end p-6 md:p-10">
            <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-extrabold text-white text-right">
                Acerca De
            </h1>
        </div>
    </section>

    <section class="h-screen bg-white text-black py-12 flex items-center">
        <div class="w-full max-w-5xl mx-auto bg-white rounded-xl shadow-lg hover:shadow-xl overflow-hidden transition-transform transform hover:scale-105">
            <div class="flex flex-wrap">
                <div class="w-full sm:w-8/12 mb-10">
                    <div class="container mx-auto h-full sm:p-10">
                        <nav class="flex px-4 justify-between items-center">
                            <div class="text-4xl font-bold">
                                Plant<span class="text-green-700">.</span>
                            </div>
                            <div>
                                <img src="https://image.flaticon.com/icons/svg/497/497348.svg" alt="" class="w-8">
                            </div>
                        </nav>
                        <header class="container px-4 lg:flex mt-10 items-center h-full lg:mt-0">
                            <div class="w-full">
                                <h1 class="text-4xl lg:text-6xl font-bold">Misión <span class="text-green-700">Ambiente CieloRojo</span> Visión</h1>
                                <div class="w-20 h-2 bg-green-700 my-4"></div>
                                <p class="text-xl mb-10 text-justify">
                                    Somos una organización de nueva generación multidisciplinaria, que busca generar investigación y transmitirla a diversos actores y públicos por medio del audiovisual y estrategias multimedia en materia de patrimonio biocultural, experiencias de conservación y defensa del patrimonio natural y la biodiversidad, entre otros.

                                    Combinamos una sólida investigación científica, con el trabajo artístico cinematográfico y multimedia para generar materiales originales, de alta calidad, con una visión intercultural y de divulgación teniendo como base una perspectiva latinoamericana de los conflictos ambientales enmarcándolos en la crisis ambiental global.
                                </p>

                            </div>
                        </header>
                    </div>
                </div>
                <img src="https://images.unsplash.com/photo-1536147116438-62679a5e01f2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80" alt="Leafs" class="w-full h-48 object-cover sm:h-screen sm:w-4/12">
            </div>
        </div>
    </section>

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
