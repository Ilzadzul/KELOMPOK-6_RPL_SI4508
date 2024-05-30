@extends('layouts.kalogakbisa')

@section('content')
<div class="container">
    <h1>Job Locations</h1>
    <form method="GET" action="{{ route('jobLocations.index') }}">
        <div class="form-group">
            <input type="text" class="form-control" id="sub_district" name="sub_district" placeholder="Search by Sub District">
        </div>
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
    <a href="{{ route('jobLocations.create') }}" class="btn btn-primary">Add New Job Location</a>
    <table class="table">
        <thead>
            <tr>
                <th>Kecamatan</th>
                <th>Kelurahan</th>
                <th>Link Map</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jobLocations as $jobLocation)
            <tr>
                <td>{{ $jobLocation->location }}</td>
                <td>{{ $jobLocation->sub_district }}</td>
                <td>{{ $jobLocation->setpoint }}</td>
                <td>
                    <a href="{{ route('jobLocations.edit', $jobLocation) }}" class="btn btn-primary">Edit</a>
                    <form method="POST" action="{{ route('jobLocations.destroy', $jobLocation) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Menampilkan hasil pencarian dari tabel contacts -->
    @if(isset($contacts))
    <h2>Contacts</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Region</th>
                <th>Position</th>
                <th>Nomor Telepon</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contacts as $contact)
            <tr>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->region }}</td>
                <td>{{ $contact->position }}</td>
                <td>{{ $contact->phone_number }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>

<div class="container mt-4">
    <div class="row">
        <div class="col text-center">
            <a href="{{ url('/dashboard') }}" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>

@endsection

<style>
.table {
    border-collapse: collapse;
}

.table th,
.table td {
    border: 1px solid #dee2e6; /* Warna border bisa disesuaikan */
    padding: 8px; /* Atur padding sesuai kebutuhan */
}

.table thead th {
    background-color: #f8f9fa; /* Warna background header tabel */
    border-bottom: 2px solid #dee2e6; /* Border bawah yang lebih tebal untuk header */
}

.table tbody tr:nth-child(odd) {
    background-color: #f2f2f2; /* Warna selang-seling untuk baris tabel */
}

/* Tambahkan responsivitas untuk tampilan mobile */
@media (max-width: 768px) {
    .table-responsive {
        border: 0;
    }
}
</style>