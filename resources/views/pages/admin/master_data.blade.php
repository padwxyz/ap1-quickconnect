@extends('components.layouts.main2')

@include('components.layouts.sidebar')

@section('container')
<section class="pl-24 pr-20 my-10 ml-56 flex-grow">
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Master Data</h1>
        <button id="addDataButton" class="bg-blue-500 text-white px-4 py-2 rounded flex items-center hover:bg-blue-600 transition duration-150 ease-in-out" onclick="openAddModal()">
            <span class="mr-2">Tambah Data</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H5a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
            </svg>
        </button>
    </div>

    <!-- Search Filters -->
    <div class="flex mb-4">
        <div class="mr-4">
            <label for="filterDivision" class="block text-gray-700">Filter by Bidang</label>
            <select id="filterDivision" class="w-full px-3 py-2 border rounded" onchange="applyFilters()">
                <option value="">All Bidang</option>
                @foreach($divisions as $division)
                    <option value="{{ $division->id }}">{{ $division->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="filterSubdivision" class="block text-gray-700">Filter by Subbidang</label>
            <select id="filterSubdivision" class="w-full px-3 py-2 border rounded" onchange="applyFilters()">
                <option value="">All Subbidang</option>
                @foreach($subdivisions as $subdivision)
                    <option value="{{ $subdivision->id }}">{{ $subdivision->name }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">Foto Profil</th>
                    <th scope="col" class="px-6 py-3">Bidang</th>
                    <th scope="col" class="px-6 py-3">Subbidang</th>
                    <th scope="col" class="px-6 py-3">Nama</th>
                    <th scope="col" class="px-6 py-3">Email</th>
                    <th scope="col" class="px-6 py-3">No. Telp</th>
                    <th scope="col" class="px-6 py-3">Status</th>
                    <th scope="col" class="px-6 py-3">Link WhatsApp</th>
                    <th scope="col" class="px-6 py-3">Aksi</th>
                </tr>
            </thead>
            <tbody id="contactTableBody">
                @foreach($contacts as $contact)
                    <tr>
                        <td class="px-6 py-4">
                            <img src="{{ Storage::url($contact->photo_profile) }}" alt="Profile Picture" class="w-10 h-10 rounded-full">
                        </td>
                        <td class="px-6 py-4">{{ $contact->division->name }}</td>
                        <td class="px-6 py-4">{{ $contact->subdivision->name }}</td>
                        <td class="px-6 py-4">{{ $contact->name }}</td>
                        <td class="px-6 py-4">{{ $contact->email }}</td>
                        <td class="px-6 py-4">{{ $contact->phone }}</td>
                        <td class="px-6 py-4">{{ $contact->status }}</td>
                        <td class="px-6 py-4">
                            <a href="{{ $contact->wa_link }}" class="text-[#66B82D] hover:text-green-700">
                                <i class="fab fa-whatsapp text-2xl"></i>
                            </a>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex space-x-2">
                                <a href="{{ url('master-data/' . $contact->id . '/edit') }}" class="bg-blue-500 text-white px-2 py-1 rounded hover:bg-blue-600 transition duration-150 ease-in-out">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ url('master-data/' . $contact->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600 transition duration-150 ease-in-out" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="mt-4">
        {{ $contacts->links() }}
    </div>
</section>

<!-- Modal for Add/Edit Data -->
<div id="overlay" class="fixed z-10 inset-0 bg-black opacity-50 hidden"></div>
<div id="dataModal" class="fixed z-20 inset-0 overflow-y-auto hidden">
    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-white p-6 rounded-lg shadow-lg w-1/3">
            <h2 id="modalTitle" class="text-xl font-bold mb-4">Tambah Data</h2>
            <form id="dataForm" action="{{ url('master-data') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="photo_profile" class="block text-gray-700">Upload Foto Profil</label>
                    <input type="file" id="photo_profile" name="photo_profile" class="w-full px-3 py-2 border rounded">
                </div>
                <div class="mb-4">
                    <label for="division_id" class="block text-gray-700">Bidang</label>
                    <select id="division_id" name="division_id" class="w-full px-3 py-2 border rounded" onchange="filterSubdivisions()">
                        @foreach($divisions as $division)
                            <option value="{{ $division->id }}">{{ $division->name }}</option>
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
                    <input type="text" id="name" name="name" class="w-full px-3 py-2 border rounded">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700">Email</label>
                    <input type="email" id="email" name="email" class="w-full px-3 py-2 border rounded">
                </div>
                <div class="mb-4">
                    <label for="phone" class="block text-gray-700">No. Telp</label>
                    <input type="text" id="phone" name="phone" class="w-full px-3 py-2 border rounded">
                </div>
                <div class="mb-4">
                    <label for="status" class="block text-gray-700">Status</label>
                    <select id="status" name="status" class="w-full px-3 py-2 border rounded">
                        <option value="Aktif">Aktif</option>
                        <option value="Non Aktif">Non Aktif</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="wa_link" class="block text-gray-700">Link WhatsApp</label>
                    <input type="text" id="wa_link" name="wa_link" class="w-full px-3 py-2 border rounded">
                </div>
                <div class="flex justify-end">
                    <button type="button" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600 transition duration-150 ease-in-out" onclick="closeModal()">Batal</button>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded ml-2 hover:bg-blue-600 transition duration-150 ease-in-out">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    const dataModal = document.getElementById('dataModal');
    const overlay = document.getElementById('overlay');
    const modalTitle = document.getElementById('modalTitle');
    const dataForm = document.getElementById('dataForm');

    // Function to open the Add Data modal
    function openAddModal() {
        modalTitle.textContent = 'Tambah Data';
        dataForm.reset();
        dataForm.action = '{{ url("master-data") }}';
        dataModal.classList.remove('hidden');
        overlay.classList.remove('hidden');
    }

    // Function to close the modal
    function closeModal() {
        dataModal.classList.add('hidden');
        overlay.classList.add('hidden');
    }

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
    }

    // Initialize the subdivisions filter when the page loads
    document.addEventListener('DOMContentLoaded', function() {
        filterSubdivisions();
    });

    // Function to apply search filters
    function applyFilters() {
        const filterDivision = document.getElementById('filterDivision').value;
        const filterSubdivision = document.getElementById('filterSubdivision').value;
        let url = new URL(window.location.href);

        if (filterDivision) {
            url.searchParams.set('division_id', filterDivision);
        } else {
            url.searchParams.delete('division_id');
        }

        if (filterSubdivision) {
            url.searchParams.set('subdivision_id', filterSubdivision);
        } else {
            url.searchParams.delete('subdivision_id');
        }

        window.location.href = url.toString();
    }
</script>
@endsection
