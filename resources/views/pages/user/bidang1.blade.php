@extends('components.layouts.main')

@section('container')
<section>
    <div class="relative h-screen bg-fixed bg-center bg-cover flex items-center"
        style="background-image: url('{{ asset('img/bidang1-page.png') }}');">
        <div class="container mx-auto text-white relative">
            <a href="{{ url('/') }}" class="fixed top-7 left bg-transparent text-white hover:text-gray-300 transition duration-300 ease-in-out">
                <i class="fas fa-arrow-left text-3xl"></i>
            </a>
            <div class="text-left text-[96px] font-bold leading-none mb-28">
                <h1>Airport</h1>
                <h1>Operations</h1>
            </div>

            <p class="text-[24px] text-left mb-8">Pilih Sub-bidang yang ingin dihubungi</p>
            
            <div class="grid grid-cols-1 text-center sm:grid-cols-3 gap-6">
                @foreach($subdivisions as $subdivision)
                    <a href="{{ url('/detail-bidang?subdivision_id=' . $subdivision->id) }}">
                        <div class="bg-white rounded-lg p-8 shadow-lg hover:shadow-2xl transition duration-300 ease-in-out cursor-pointer transform hover:-translate-y-2">
                            <h2 class="text-xl font-semibold text-gray-800">{{ $subdivision->name }}</h2>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
