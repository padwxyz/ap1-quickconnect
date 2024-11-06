@extends('components.layouts.main2')

@include('components.partials.sidebar')

@section('container')
    <section class="pl-24 pr-20 my-10 ml-56 flex-grow">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">Dashboard Admin</h1>
        </div>

        <div class="grid grid-cols-4 gap-6 mb-6">
            <div class="bg-white p-6 rounded-lg shadow">
                <h2 class="text-xl font-bold text-gray-700">Total Data</h2>
                <p class="text-3xl font-semibold text-blue-500 mt-2">{{ $totalData }}</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow">
                <h2 class="text-xl font-bold text-gray-700">Bidang Aktif</h2>
                <p class="text-3xl font-semibold text-green-500 mt-2">{{ $activeDivisions }}</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow">
                <h2 class="text-xl font-bold text-gray-700">Subbidang Aktif</h2>
                <p class="text-3xl font-semibold text-green-500 mt-2">{{ $activeSubdivisions }}</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow">
                <h2 class="text-xl font-bold text-gray-700">Data Baru Bulan Ini</h2>
                <p class="text-3xl font-semibold text-yellow-500 mt-2">{{ $newDataThisMonth }}</p>
            </div>
        </div>

        <div class="bg-white p-6 rounded-lg shadow">
            <h2 class="text-xl font-bold text-gray-700 mb-4">Entri Data Terbaru</h2>
            <ul class="divide-y divide-gray-200">
                @foreach ($recentContacts as $contact)
                    <li class="py-4 flex justify-between items-center">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-700">{{ $contact->name }} -
                                {{ $contact->division->name }}</h3>
                            <p class="text-gray-500">{{ $contact->subdivision->name }},
                                {{ $contact->created_at->diffForHumans() }}</p>
                        </div>
                        <a href="{{ url('master-data/' . $contact->id . '/edit') }}"
                            class="text-blue-500 hover:text-blue-600">Detail</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
@endsection
