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

