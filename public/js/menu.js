document.addEventListener("DOMContentLoaded", function() {
    // Inyectar las rutas de Blade en el JavaScript
    const landingIndex = "{{ route('landing.index') }}";
    const landingProyecto = "{{ route('landing.proyecto') }}";
    const landingBlogs = "{{ route('landing.blogs') }}";
    const landingGaleria = "{{ route('landing.galeria') }}";
    const landingAcerca = "{{ route('landing.acerca') }}";
    const landingQuienesSomos = "{{ route('landing.quienes.somos') }}";
    const landingPremios = "{{ route('landing.premios') }}";
    const landingDonaciones = "{{ route('landing.donaciones') }}";

    const menuToggle = document.getElementById('menu-toggle');
    const navMenu = document.createElement('ul');
    navMenu.className = 'flex flex-col space-y-4 p-6 bg-white absolute right-0 top-16 w-48 shadow-md hidden md:hidden';
    navMenu.innerHTML = `
            <li><a href="${landingIndex}" class="hover:text-gray-600 transition">Inicio</a></li>
            <li><a href="${landingProyecto}" class="hover:text-gray-600 transition">Proyecto</a></li>
            <li><a href="${landingBlogs}" class="hover:text-gray-600 transition">Blogs</a></li>
            <li><a href="${landingGaleria}" class="hover:text-gray-600 transition">Galería</a></li>
            <li><a href="${landingAcerca}" class="hover:text-gray-600 transition">Acerca de</a></li>
            <li><a href="${landingQuienesSomos}" class="hover:text-gray-600 transition">Quiénes Somos</a></li>
            <li><a href="${landingPremios}" class="hover:text-gray-600 transition">Premios</a></li>
            <li><a href="${landingDonaciones}" class="hover:text-gray-600 transition">Donaciones</a></li>
        `;

    menuToggle.addEventListener('click', () => {
        navMenu.classList.toggle('hidden');
        document.body.appendChild(navMenu);
    });
});
