@extends('components.layouts.main2')

@include('components.partials.sidebar')

@section('container')
    <section class="pl-24 pr-20 my-10 ml-56 flex-grow">
        <div class="mb-4">
            <h1 class="text-2xl font-bold mb-4">Detail Data</h1>
            <a href="{{ url('master-data') }}" class="text-blue-500 hover:text-blue-700">&larr; Kembali ke Master Data</a>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <div class="flex items-center mb-4">
                <img src="{{ Storage::url($contact->photo_profile) }}" alt="Profile Picture"
                    class="w-20 h-20 rounded-full mr-4">
                <h2 class="text-xl font-bold">{{ $contact->name }}</h2>
            </div>
            <p class="mb-4"><strong>Bidang:</strong> {{ $contact->division->name }}</p>
            <p class="mb-4"><strong>Subbidang:</strong> {{ $contact->subdivision->name }}</p>
            <p class="mb-4"><strong>Email:</strong> {{ $contact->email }}</p>
            <p class="mb-4"><strong>No. Telp:</strong> {{ $contact->phone }}</p>
            <p class="mb-4"><strong>Status:</strong> {{ $contact->status }}</p>
            <p class="mb-4"><strong>Link WhatsApp:</strong>
                <a href="{{ $contact->wa_link }}" class="text-green-500 hover:text-green-700">
                    <i class="fab fa-whatsapp"></i> {{ $contact->wa_link }}
                </a>
            </p>
        </div>
    </section>
@endsection
