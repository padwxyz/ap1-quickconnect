@extends('components.layouts.main2')

@include('components.layouts.sidebar')

@section('container')
<section class="pl-24 pr-20 my-10 ml-56 flex-grow">
    <div class="bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold mb-4">Edit Data</h2>
        <form action="{{ url('master-data/' . $contact->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="photo_profile" class="block text-gray-700">Upload Foto Profil</label>
                <input type="file" id="photo_profile" name="photo_profile" class="w-full px-3 py-2 border rounded">
            </div>
            <div class="mb-4">
                <label for="division_id" class="block text-gray-700">Bidang</label>
                <select id="division_id" name="division_id" class="w-full px-3 py-2 border rounded" onchange="filterSubdivisions()">
                    @foreach($divisions as $division)
                        <option value="{{ $division->id }}" {{ $division->id == $contact->division_id ? 'selected' : '' }}>{{ $division->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="subdivision_id" class="block text-gray-700">Subbidang</label>
                <select id="subdivision_id" name="subdivision_id" class="w-full px-3 py-2 border rounded">
                    <!-- Subdivisions will be populated dynamically -->
                </select>
            </div>
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Nama</label>
                <input type="text" id="name" name="name" value="{{ $contact->name }}" class="w-full px-3 py-2 border rounded">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input type="email" id="email" name="email" value="{{ $contact->email }}" class="w-full px-3 py-2 border rounded">
            </div>
            <div class="mb-4">
                <label for="phone" class="block text-gray-700">No. Telp</label>
                <input type="text" id="phone" name="phone" value="{{ $contact->phone }}" class="w-full px-3 py-2 border rounded">
            </div>
            <div class="mb-4">
                <label for="status" class="block text-gray-700">Status</label>
                <select id="status" name="status" class="w-full px-3 py-2 border rounded">
                    <option value="Aktif" {{ $contact->status == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                    <option value="Non Aktif" {{ $contact->status == 'Non Aktif' ? 'selected' : '' }}>Non Aktif</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="wa_link" class="block text-gray-700">Link WhatsApp</label>
                <input type="text" id="wa_link" name="wa_link" value="{{ $contact->wa_link }}" class="w-full px-3 py-2 border rounded">
            </div>
            <div class="flex justify-end">
                <button type="button" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600 transition duration-150 ease-in-out" onclick="window.location.href='{{ url('master-data') }}'">Batal</button>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded ml-2 hover:bg-blue-600 transition duration-150 ease-in-out">Simpan</button>
            </div>
        </form>
    </div>
</section>

<script>
    // Function to filter subdivisions based on selected division
    function filterSubdivisions() {
        const divisionId = document.getElementById('division_id').value;
        const subdivisionSelect = document.getElementById('subdivision_id');

        // Clear existing options
        subdivisionSelect.innerHTML = '';

        // Fetch subdivisions for the selected division
        const subdivisions = @json($subdivisions);
        subdivisions.forEach(subdivision => {
            if (subdivision.division_id == divisionId) {
                const option = document.createElement('option');
                option.value = subdivision.id;
                option.textContent = subdivision.name;
                subdivisionSelect.appendChild(option);
            }
        });

        // Set the current subdivision if editing
        @isset($contact)
            subdivisionSelect.value = '{{ $contact->subdivision_id }}';
        @endisset
    }

    // Initialize the subdivisions filter when the page loads
    document.addEventListener('DOMContentLoaded', function() {
        filterSubdivisions();
    });
</script>
@endsection
