@extends('components.layouts.main')

@include('components.partials.navbar')

@section('container')
    <section id="Beranda" class="mb-[100px]">
        <div class="relative h-[600px] bg-fixed bg-center bg-cover"
            style="background-image: url('{{ asset('img/background.png') }}');">
            <div class="relative flex flex-col text-center items-center justify-center h-full mx-20">
                <div class="flex">
                    <img src="{{ asset('img/logo.png') }}" class="h-7 mb-3" alt="">
                    <h3 class="text-white text-[20px] font-regular">ANGKASA PURA | AIRPORTS</h3>
                </div>
                <h1 class="text-white text-[96px] font-bold">Quick Connect</h1>
                <h3 class="text-white text-[20px] font-regular">memudahkan akses cepat ke daftar kontak penting di terminal
                    bandara, <br> memungkinkan staf bandara untuk menemukan dan menghubungi nomor telepon dengan
                    efisien.
                </h3>
                <a href="#Bidang">
                    <button
                        class="text-[24px] w-[176px] h-[50px] text-white font-semibold mt-10 rounded-md flex items-center justify-center"
                        style="background: linear-gradient(90deg, #66B82D 0.07%, #009BE0 96.65%);">
                        Cari <span class="ml-2">↓</span>
                    </button>
                </a>
            </div>
        </div>
    </section>

    <section id="Tentang" class="container mb-[100px]">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="flex justify-center items-center">
                <img src="{{ asset('img/about.png') }}" alt="QuickConnect Image"
                    class="w-[350px] h-auto rounded-xl shadow-lg">
            </div>

            <div class="flex flex-col justify-center">
                <h2 class="text-[48px] font-semibold leading-tight mb-16">
                    Welcome to <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-[#66B82D] to-[#009BE0]">QuickConnect</span>
                </h2>
                <div class="text-[20px] text-justify">
                    <p class="text-gray-700 mb-6">
                        QuickConnect adalah platform digital yang dirancang khusus untuk memfasilitasi akses cepat dan mudah
                        ke daftar kontak penting di terminal bandara, seperti petugas keamanan, layanan medis, dan manajer
                        operasional.
                    </p>
                    <p class="text-gray-700 mb-8">
                        Dengan fitur pencarian canggih dan pengelompokan kontak, staf bandara dapat dengan cepat menemukan
                        dan menghubungi nomor telepon yang diperlukan untuk menangani situasi darurat atau operasional
                        sehari-hari.
                    </p>
                </div>
                <div class="flex mt-10">
                    <img src="{{ asset('img/logo.png') }}" class="h-6 mb-3" alt="">
                    <h3 class="ml-3 text-[20px] font-normal">ANGKASA PURA | AIRPORTS</h3>
                </div>
            </div>
        </div>
    </section>

    <section id="Service" class="mb-[100px]">
        <div class="container mx-auto px-4 md:px-8">
            <div class="text-center mb-10">
                <h1 class="text-[36px] sm:text-[48px] font-semibold leading-tight">Layanan Kami</h1>
                <p class="text-[16px] sm:text-[18px] md:text-[20px] leading-relaxed text-gray-600 mt-4 mb-6">
                    QuickConnect menyediakan fitur-fitur yang memudahkan staf bandara mengakses <br> dan menghubungi kontak
                    penting dengan cepat untuk mendukung kelancaran operasional.
                </p>
                <div class="w-[200px] sm:w-[300px] md:w-[350px] lg:w-[450px] h-1 bg-[#66B82D] mx-auto mb-8"></div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                <div
                    class="flex flex-col items-center justify-center p-6 border border-gray-300 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <div class="text-green-500 text-3xl mb-4">
                        📞
                    </div>
                    <h3 class="text-lg font-bold mb-2">Akses Kontak Langsung</h3>
                    <p class="text-gray-600 text-sm text-center">Hubungi kontak penting dalam satu klik untuk memastikan
                        komunikasi cepat dan efisien saat dibutuhkan.</p>
                </div>
                <div
                    class="flex flex-col items-center justify-center p-6 border border-gray-300 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <div class="text-blue-500 text-3xl mb-4">
                        🔍
                    </div>
                    <h3 class="text-lg font-bold mb-2">Pencarian Kontak Efisien</h3>
                    <p class="text-gray-600 text-sm text-center">Temukan informasi kontak yang diperlukan dengan cepat
                        melalui fitur pencarian yang efisien.</p>
                </div>
                <div
                    class="flex flex-col items-center justify-center p-6 border border-gray-300 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <div class="text-purple-500 text-3xl mb-4">
                        💼
                    </div>
                    <h3 class="text-lg font-bold mb-2">Dukungan Operasional</h3>
                    <p class="text-gray-600 text-sm text-center">Pastikan operasional berjalan lancar dengan akses cepat ke
                        kontak yang relevan untuk koordinasi langsung.</p>
                </div>
            </div>
        </div>
    </section>


    <section id="Bidang" class="container mx-auto mb-[100px]">
        <div class="text-center mb-14">
            <h1 class="text-[48px] font-semibold">Lihat Kontak Sesuai Bidang</h1>
            <h3 class="text-[20px] font-regular text-gray-600 mt-4 mb-6">Silahkan pilih bidang dari pegawai yang ingin anda
                hubungi dan akses langsung <br>
                untuk melihat seluruh kontak pegawai yang ingin anda cari
            </h3>
            <div class="w-[200px] sm:w-[300px] md:w-[350px] lg:w-[450px] h-1 bg-[#66B82D] mx-auto mb-8"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="relative bg-gray-900 rounded-xl overflow-hidden shadow-lg">
                <img src="{{ asset('img/bidang1.png') }}" alt="Airport Operations"
                    class="w-full h-[500px] object-cover opacity-75">
                <div class="absolute bottom-0 left-0 right-0 p-10 text-white">
                    <h1 class="text-[24px] font-semibold mb-2">Airport Operations</h1>
                    <p class="text-[16px] font-normal mb-4">Mengelola seluruh aspek operasional bandara, termasuk penanganan
                        pesawat, bagasi, dan lalu lintas udara.</p>
                    <a href="{{ url('/bidang1') }}">
                        <button class="bg-[#0045A4] text-white font-semibold py-2 px-4 rounded-lg w-[100px]">Lihat</button>
                    </a>
                </div>
            </div>

            <div class="relative bg-gray-900 rounded-xl overflow-hidden shadow-lg">
                <img src="{{ asset('img/bidang2.png') }}" alt="Aviation Security"
                    class="w-full h-[500px] object-cover opacity-75">
                <div class="absolute bottom-0 left-0 right-0 p-10 text-white">
                    <h1 class="text-[24px] font-semibold mb-2">Aviation Security</h1>
                    <p class="text-[16px] font-normal mb-4">Menjaga keamanan bandara melalui pemantauan, pengawasan, dan
                        kontrol akses untuk melindungi penumpang dan fasilitas.</p>
                    <a href="{{ url('/bidang2') }}">
                        <button class="bg-[#0045A4] text-white font-semibold py-2 px-4 rounded-lg w-[100px]">Lihat</button>
                    </a>
                </div>
            </div>

            <div class="relative bg-gray-900 rounded-xl overflow-hidden shadow-lg">
                <img src="{{ asset('img/bidang3.png') }}" alt="Airport Technology"
                    class="w-full h-[500px] object-cover opacity-75">
                <div class="absolute bottom-0 left-0 right-0 p-10 text-white">
                    <h1 class="text-[24px] font-semibold mb-2">Airport Technology</h1>
                    <p class="text-[16px] font-normal mb-4">Mengelola dan mengembangkan infrastruktur teknologi, keamanan
                        siber, serta jaringan komunikasi untuk mendukung operasional bandara secara efisien.</p>
                    <a href="{{ url('/bidang3') }}">
                        <button class="bg-[#0045A4] text-white font-semibold py-2 px-4 rounded-lg w-[100px]">Lihat</button>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="FAQ" class="container mx-auto mb-[100px] px-4 md:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="relative">
                <h1 class="text-[36px] sm:text-[48px] md:text-[60px] font-bold leading-tight">Frequently Asked Question
                </h1>
                <p class="mt-4 text-[16px] sm:text-[18px]">Dapatkan jawaban atas pertanyaan yang sering diajukan tentang
                    Angkasa Pura QuicConnect, fitur-fiturnya, dan cara menggunakannya</p>
                <div class="w-[180px] sm:w-[250px] md:w-[350px] h-1 bg-[#66B82D] mt-5"></div>
            </div>
            <div>
                @include('components.partials.faq')
            </div>
        </div>
    </section>

    @include('components.partials.footer')
@endsection
