@extends('components.layouts.main')

@include('components.layouts.navbar')

@section('container')
<section id="Beranda" class="mb-[100px]">
    <div class="relative h-screen bg-fixed bg-center bg-cover"
        style="background-image: url('{{ asset('img/background.png') }}');">
        <div class="relative flex flex-col text-right items-end justify-center h-full mx-20">
            <div class="flex mt-14">
                <img src="{{ asset('img/logo.png') }}" class="h-9 mb-3" alt="">
                <h3 class="text-white text-[28px] font-regular">ANGKASA PURA | AIRPORTS</h3>
            </div>
            <h1 class="text-white text-[96px] font-bold">Quick Connect</h1>
            <h3 class="text-white text-[24px] font-regular">memudahkan akses cepat ke daftar kontak penting di terminal
                <br> bandara, memungkinkan staf bandara untuk menemukan dan <br> menghubungi nomor telepon dengan
                efisien.</h3>
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
            <h2 class="text-[48px] font-semibold mb-16">
                Welcome to <span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-[#66B82D] to-[#009BE0]">QuickConnect</span>
            </h2>
            <div class="text-[24px] text-justify">
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

<section id="Layanan" class="mb-[100px] h-[600px] text-white relative bg-center bg-cover p-12"
    style="background-image: url('{{ asset('img/service.png') }}');">
    <div class="flex flex-col justify-center items-center h-full px-8 py-10">
        <div class="flex items-center mb-8">
            <h1 class="text-[128px] font-bold mr-4">03</h1>
            <div>
                <p class="text-[24px] font-medium mb-1">Layanan</p>
                <h2 class="text-[48px] font-bold">QuickConnect</h2>
            </div>
        </div>
        <div class="text-center mb-20">
            <p class="text-[24px] font-normal leading-relaxed">
                QuickConnect menawarkan tiga fitur utama untuk memudahkan staf bandara mengakses dan <br> menghubungi
                kontak penting dengan cepat dan mudah.
            </p>
        </div>
        <div class="grid grid-cols-3 gap-6 text-center justify-center">
            <div class="border-r border-gray-300 pr-4">
                <h3 class="text-[30px] font-semibold mb-12">Akses Kontak Langsung</h3>
            </div>
            <div class="border-r border-gray-300 pr-4">
                <h3 class="text-[30px] font-semibold mb-12">Manajemen Dukungan Operasional</h3>
            </div>
            <div class="pl-4">
                <h3 class="text-[30px] font-semibold mb-12">Log Aktivitas Pengguna</h3>
            </div>
        </div>
    </div>
</section>

<section id="Bidang" class="container mx-auto mb-[100px]">
    <div class="text-center mb-14">
        <h1 class="text-[40px] font-semibold">BIDANG</h1>
        <h3 class="text-[24px] font-regular text-gray-600">Silahkan pilih bidang dari pegawai yang ingin anda hubungi
        </h3>
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
                    <button class="bg-white text-gray-900 font-semibold py-2 px-4 rounded-lg w-[100px]">Lihat</button>
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
                    <button class="bg-white text-gray-900 font-semibold py-2 px-4 rounded-lg w-[100px]">Lihat</button>
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
                    <button class="bg-white text-gray-900 font-semibold py-2 px-4 rounded-lg w-[100px]">Lihat</button>
                </a>
            </div>
        </div>
    </div>
</section>

<section id="FAQ" class="text-white relative h-screen bg-fixed bg-center bg-cover"
    style="background-image: url('{{ asset('img/faq-background.png') }}');">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="relative pt-[80px]">
            <div class="absolute top-[-20px] left-0">
                {{-- <img src="{{ asset('img/banner-faq.png') }}" class="w-[180px] h-[55px]" alt=""> --}}
            </div>
            <h1 class="text-[60px] font-bold">Frequently Asked Question</h1>
            <p class="mt-4 text-[18px]">Dapatkan jawaban atas pertanyaan yang sering diajukan tentang Angkasa Pura
                Notebook, fitur-fiturnya, dan cara menggunakannya</p>
            <div class="w-[350px] h-1 bg-[#66B82D] mt-5"></div>
        </div>
        <div class="pt-[80px]">
            @include('components.layouts.faq')
        </div>
    </div>
</section>

@include('components.layouts.footer')
@endsection
