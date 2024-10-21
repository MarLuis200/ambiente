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
            <img src="{{ asset('img/fondo.jpg') }}" alt="Background" class="w-full h-full object-cover ">
        </div>

        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-end justify-end p-6 md:p-10">
            <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-extrabold text-white text-right">
                Donaciones
            </h1>
        </div>
    </section>

    <img class="rounded-lg w-full h-full object-cover" src="{{ asset('img/laureles.jpg') }}" alt="Ambiente">
    <section class="py-16 bg-[#fdf8f4]">
        <div class="max-w-5xl mx-auto bg-white rounded-2xl shadow-lg transition-transform transform hover:scale-105 overflow-hidden">
            <div class="flex flex-col md:flex-row">
                <div class="md:w-1/2 p-8 bg-[#f7f2ee]">
                    <h2 class="text-3xl font-bold text-brown-700 mb-4 text-center md:text-jutify">
                        Campaña Integral Contra Incendios 2021
                    </h2>
                    <p class="text-xl font-semibold text-gray-800 mb-2 text-center md:text-left italic">"La Huella del Fuego"</p>
                    <p class="text-gray-700 mb-6 text-justify leading-relaxed">
                        Si deseas apoyarnos para continuar con el proyecto Ambiente CieloRojo, aquí tienes nuestros datos. ¡Gracias por tu apoyo y por contribuir a la protección del medio ambiente!
                    </p>
                    <div class="space-y-4 text-gray-800 text-jutify" >
                        <p><span class="font-semibold">Nombre en la cuenta:</span> Ambiente CieloRojo, S.A.S. de C.V.</p>
                        <p><span class="font-semibold">Dirección del cuentahabiente:</span> Atardecer 121, Barrio Santa María Ahuacatlán, Valle de Bravo, C.P. 51200, México</p>
                        <p><span class="font-semibold">Banco:</span> Santander</p>
                        <p><span class="font-semibold">Sucursal:</span> 1102, Valle de Bravo</p>
                        <p><span class="font-semibold">Dirección del banco:</span> Calle Porfirio Díaz 202, Centro, 51200 Valle de Bravo, Méx.</p>
                        <p><span class="font-semibold">Número de cuenta:</span> 65-50693098-6</p>
                        <p><span class="font-semibold">CLABE:</span> 014457655069309862</p>
                        <p><span class="font-semibold">Correo:</span> <a href="mailto:ambientecielorojo@gmail.com" class="text-brown-500 underline">ambientecielorojo@gmail.com</a></p>
                    </div>
                </div>

                <div class="md:w-1/2 flex items-center justify-center bg-cover bg-center" style="background-image: url('{{ asset('img/cielo.png') }}');">
                    <div class="bg-black bg-opacity-30 w-full h-full flex items-center justify-center p-6">
                        <div class="text-center text-white">
                            <p class="text-lg md:text-xl font-semibold">Tu apoyo es esencial para combatir los incendios y proteger nuestro entorno natural.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-10">
            <a href="mailto:ambientecielorojo@gmail.com" class="bg-brown-600 text-black py-3 px-8 rounded-full shadow-md hover:bg-brown-700 transition duration-300">
                Contáctanos
            </a>
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
