@extends('components.layouts.main')

@section('container')
<section>
    <div class="relative h-[390px] bg-center bg-cover flex items-center"
        style="background-image: url('{{ asset('img/detail-bidang.png') }}');">
        <div class="container mx-auto">
            <a href="{{ url()->previous() }}" class="fixed top-7 left bg-transparent text-white hover:text-gray-300 transition duration-300 ease-in-out">
                <i class="fas fa-arrow-left text-3xl"></i>
            </a>
            <div class="text-center justify-center text-white p-36">
                <h1 class="text-[60px] font-bold">{{ $subdivision->name }}</h1>
                <h3 class="text-[24px] font-normal">Berikut daftar nomor telepon di bidang ini</h3>
            </div>
        </div>
    </div>
</section>
<section class="py-10">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-[32px] font-bold text-[#66B82D]">Daftar Kontak</h2>
            <div class="relative">
                <input type="text" class="text-[20px] py-2 pr-10 pl-4 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#66B82D]" placeholder="Cari">
                <button class="absolute right-4 top-1/2 transform -translate-y-1/2 text-[#66B82D]">
                    <i class="fas fa-search"></i>
                </button>
            </div> 
        </div>
        <div class="relative overflow-x-auto shadow-md rounded-lg">
            <table class="w-full text-[20px] text-center text-gray-500">
                <thead class="text-[20px] text-gray-700 uppercase bg-gray-100">
                    <tr>
                        <th scope="col" class="px-6 py-3">Nama</th>
                        <th scope="col" class="px-6 py-3">Email</th>
                        <th scope="col" class="px-6 py-3">No. Telp</th>
                        <th scope="col" class="px-6 py-3">Status</th>
                        <th scope="col" class="px-6 py-3">Hubungi</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($contacts as $contact)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap flex items-center">
                            <img class="h-[100px] w-[100px] rounded-full mr-4" src="{{ Storage::url($contact->photo_profile) }}" alt="User Image">
                            <span class="font-medium text-gray-900">{{ $contact->name }}</span>
                        </td>
                        <td class="px-6 py-4">{{ $contact->email }}</td>
                        <td class="px-6 py-4">{{ $contact->phone }}</td>
                        <td class="px-6 py-4">{{ $contact->status }}</td>
                        <td class="px-6 py-4">
                            <a href="{{ $contact->wa_link }}" class="text-[#66B82D] hover:text-green-700">
                                <i class="fab fa-whatsapp text-2xl"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
