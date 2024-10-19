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
<header id="main-header" class="bg-black fixed w-full z-10 transition duration-300">
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
        <div class="absolute inset-0 overflow-hidden">
            <iframe
                src="https://www.youtube.com/embed/EBgZ-SdkOtQ?rel=0&modestbranding=1&controls=1"
                frameborder="0"
                allow="autoplay; encrypted-media"
                allowfullscreen
                class="w-full h-full object-cover">
            </iframe>
        </div>
    </section>


    <section class="h-screen bg-white text-black py-12 flex items-center">
        <div class="w-full max-w-5xl mx-auto bg-white rounded-xl shadow-lg hover:shadow-xl overflow-hidden transition-transform transform hover:scale-105">
            <h1 class="text-2xl md:text-3xl lg:text-4xl font-semibold text-indigo-600 mb-4 text-center md:text-left">
                Ambiente CieloRojo
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



    <section class="bg-white text-black py-12">
        <div class="container mx-auto">
            <h2 class="section-title">
                Gobernanza del agua en las comunidades de la Cuenca del Río San Juan Zitácuaro
            </h2>
            <p class="section-description">
                La crisis del agua avanza rápidamente, y la gobernanza hídrica comunitaria se presenta como un modelo ideal para enfrentarla en el medio rural.
                Este enfoque ha demostrado ser efectivo en la Cuenca del Río San Juan Zitácuaro, ubicada en la región de la mariposa monarca, donde las comunidades se esfuerzan por preservar y gestionar sus recursos hídricos.
            </p>
            <div class="video-container">
                <div class="video-wrapper">
                    <iframe
                        src="https://www.youtube.com/embed/MBM4yN-8yYE"
                        frameborder="0"
                        allow="autoplay; fullscreen;"
                        allowfullscreen
                        class="responsive-iframe"
                        title="Gobernanza del agua en las comunidades de la Cuenca del Río San Juan Zitácuaro">
                    </iframe>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white text-black py-12">
        <div class="container mx-auto">
            <h2 class="section-title">
                Documental "El taco Mazahua, entre el oro verde y la monarca".
            </h2>
            <div class="video-container">
                <div class="video-wrapper">
                    <iframe
                        src="https://www.youtube.com/embed/zP3_M483aZU"
                        frameborder="0"
                        allow="autoplay; fullscreen;"
                        allowfullscreen
                        class="responsive-iframe"
                        title="Documental">
                    </iframe>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white text-blue-200 py-12">
        <div class="container mx-auto">
            <h2 class="text-2xl md:text-3xl lg:text-4xl font-semibold text-indigo-600 mb-4 text-center md:text-left">
                Nuestros Proyectos
            </h2>
            <p class="section-description">Explora algunos de los proyectos más innovadores que hemos desarrollado recientemente.</p>
        </div>
    </section>



    <section class="bg-white text-black py-12">
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-center text-fuchsia-500 mb-8">
            Aliados
        </h1>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">

            <div class="p-4">
                <img class="h-auto max-w-full rounded-lg shadow-lg transition-transform duration-300 ease-in-out hover:scale-105" src="{{ asset('img/red_monarca.jpg') }}" alt="Monarca">
            </div>

            <div class="p-4">
                <img class="h-auto max-w-full rounded-lg shadow-lg transition-transform duration-300 ease-in-out hover:scale-105" src="{{ asset('img/alternare.jpg') }}" alt="Alternare">
            </div>

            <div>
                <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/monarch.jpg') }}" alt="Monarch">
            </div>

            <div>
                <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/soy_mazahua.jpg') }}" alt="Soy Mazahua">
            </div>

            <div>
                <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/silencio.png') }}" alt="Silencio">
            </div>

            <div>
                <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/procuenca.jpg') }}" alt="Procuenca" >
            </div>

            <div>
                <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/consejo_civil.jpg') }}" alt="Consejo Civil">
            </div>

            <div>
                <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/colonos_montana.jpg') }}" alt="Colonos">
            </div>

            <div>
                <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/agaveli.jpg') }}" alt="Agaveli">
            </div>

            <div>
                <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/reserva_mariposa_monarca.jpg') }}" alt="Monarca">
            </div>

            <div>
                <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/cemda.jpg') }}" alt="Cemda">
            </div>

            <div>
                <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/biocenosis.jpg') }}" alt="Biocenosis">
            </div>

            <div>
                <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/fondo_mexicano.jpg') }}" alt="Fondo Mexicano">
            </div>

            <div>
                <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/focem.jpg') }}" alt="Focem">
            </div>

            <div>
                <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/iztacala2.jpg') }}" alt="Izcala">
            </div>

            <div>
                <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/tesvb.jpg') }}" alt="Tesvb">
            </div>

            <div>
                <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/icar.jpg') }}" alt="Icar">
            </div>

            <div>
                <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/probosque.jpg') }}" alt="Probosque">
            </div>

            <div>
                <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/conanp.jpg') }}" alt="Conanp">
            </div>

            <div>
                <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/aguacateros.jpg') }}" alt="Aguacateros">
            </div>

            <div>
                <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/pacmyc.jpg') }}" alt="Pacmyc">
            </div>

            <div>
                <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/cruz_roja.jpg') }}" alt="Cruz Roja">
            </div>

            <div>
                <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/leddy.jpg') }}" alt="Leddy">
            </div>

            <div>
                <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/onirica.jpg') }}" alt="Leddy">
            </div>

            <div>
                <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/puerto_ventanas.jpg') }}" alt="Leddy">
            </div>

            <div>
                <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/odisea.jpg') }}" alt="Leddy">
            </div>

            <div>
                <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/medical_mission.jpg') }}" alt="Leddy">
            </div>

            <div>
                <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/flesh.jpg') }}" alt="Leddy">
            </div>

            <div>
                <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/barrio.jpg') }}" alt="Leddy">
            </div>

            <div>
                <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/va_valle.jpg') }}" alt="Leddy">
            </div>

            <div>
                <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/ecoacatitlan.jpg') }}" alt="Leddy">
            </div>

            <div>
                <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/camaleon.jpg') }}" alt="Leddy">
            </div>

            <div>
                <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/guardianes_valle.jpg') }}" alt="Leddy">
            </div>

            <div>
                <img class="h-auto max-w-full rounded-lg" src="{{ asset('img/efas.jpeg') }}" alt="Leddy">
            </div>

        </div>

    </section>






    <footer class="flex flex-col md:flex-row items-center justify-between bg-white py-6 px-10 space-y-4 md:space-y-0">
        <p class="text-gray-700 font-medium">
            &copy; 2024 Ambiente Cielo Rojo. Todos los derechos reservados.
        </p>
        <p class="text-gray-700 font-medium">
            Ambiente Cielo Rojo
        </p>
        <div class="flex items-center space-x-5">
            <p class="text-gray-700 font-medium">
                Síguenos en...
            </p>
            <a href="#" target="_blank" rel="noopener noreferrer">
                <img src="https://img.icons8.com/fluent/30/000000/facebook-new.png" alt="Facebook" />
            </a>
            <a href="#" target="_blank" rel="noopener noreferrer">
                <img src="https://img.icons8.com/fluent/30/000000/linkedin-2.png" alt="LinkedIn" />
            </a>
            <a href="#" target="_blank" rel="noopener noreferrer">
                <img src="https://img.icons8.com/fluent/30/000000/instagram-new.png" alt="Instagram" />
            </a>
            <a href="#" target="_blank" rel="noopener noreferrer">
                <img src="https://img.icons8.com/fluent/30/000000/facebook-messenger--v2.png" alt="Messenger" />
            </a>
            <a href="#" target="_blank" rel="noopener noreferrer">
                <img src="https://img.icons8.com/fluent/30/000000/twitter.png" alt="Twitter" />
            </a>
        </div>
    </footer>
    </body>
</html>
