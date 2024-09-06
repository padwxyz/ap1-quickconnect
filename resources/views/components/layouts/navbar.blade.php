<nav id="navbar" class="fixed w-full z-10 top-0 left-0 py-1 bg-blue-800 transition-all duration-300 ease-in-out">
    <div class="container mx-auto px-4">
        <div class="relative flex h-16 items-center justify-between">
            <!-- Logo di kiri -->
            <div class="flex items-center w-[110px] h-[40px]">
                <img class="h-7 w-auto" src="{{ asset('img/logo.png') }}" alt="Your Company">
            </div>

            <!-- Hamburger button for mobile -->
            <div class="sm:hidden flex items-center">
                <button id="mobile-menu-button" class="text-white focus:outline-none">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>

            <!-- Menu di kanan (Desktop) -->
            <div class="hidden sm:flex flex-1 justify-end items-center">
                <div class="flex space-x-4">
                    <a href="#Beranda" class="rounded-md px-3 py-2 text-[18px] font-medium text-white hover:bg-[#66B82D] hover:text-white">Beranda</a>
                    <a href="#Tentang" class="rounded-md px-3 py-2 text-[18px] font-medium text-white hover:bg-[#66B82D] hover:text-white">Tentang</a>
                    <a href="#Layanan" class="rounded-md px-3 py-2 text-[18px] font-medium text-white hover:bg-[#66B82D] hover:text-white">Layanan</a>
                    <a href="#Bidang" class="rounded-md px-3 py-2 text-[18px] font-medium text-white hover:bg-[#66B82D] hover:text-white">Bidang</a>
                    <a href="#FAQ" class="rounded-md px-3 py-2 text-[18px] font-medium text-white hover:bg-[#66B82D] hover:text-white">FAQ</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile menu -->
    <div id="mobile-menu" class="hidden sm:hidden">
        <div class="space-y-1 px-2 pb-3 pt-2 bg-blue-800">
            <a href="#Beranda" class="block rounded-md px-3 py-2 text-[18px] font-medium text-white hover:bg-[#66B82D]">Beranda</a>
            <a href="#Tentang" class="block rounded-md px-3 py-2 text-[18px] font-medium text-white hover:bg-[#66B82D]">Tentang</a>
            <a href="#Layanan" class="block rounded-md px-3 py-2 text-[18px] font-medium text-white hover:bg-[#66B82D]">Layanan</a>
            <a href="#Bidang" class="block rounded-md px-3 py-2 text-[18px] font-medium text-white hover:bg-[#66B82D]">Bidang</a>
            <a href="#FAQ" class="block rounded-md px-3 py-2 text-[18px] font-medium text-white hover:bg-[#66B82D]">FAQ</a>
        </div>
    </div>
</nav>

<script>
    // Toggle mobile menu
    document.getElementById('mobile-menu-button').addEventListener('click', function () {
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenu.classList.toggle('hidden');
    });
</script>