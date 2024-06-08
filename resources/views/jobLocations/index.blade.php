@extends('layouts.kalogakbisa')

@section('content')
<div class="container" style="border: 2px solid #f2f2f2; padding: 20px; margin-left: 55px; border-radius: 10px; background-color: #f2f2f2; box-shadow: 5px 5px 15px rgba(0,0,0,0.3);">
    <h1 style="text-align: center; margin-bottom: 30px; font-size: 40px;">JOB LOCATIONS</h1>
    <form method="GET" action="{{ route('jobLocations.index') }}">
        <div class="form-group">
            <input type="text" class="form-control" id="sub_district" name="sub_district" placeholder="Cari Berdasarkan Kecamatan">
        </div>
        <button type="submit" class="btn btn-primary">Cari</button>
    </form>
    @if(Auth::user()->user_type == 'Super Admin')
        <a href="{{ route('jobLocations.create') }}" class="btn btn-primary">Tambah Lokasi Pekerjaan</a>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>Kecamatan</th>
                <th>Kelurahan</th>
                <th>Link Map</th>
                @if(Auth::user()->user_type == 'Super Admin')
                    <th>Aksi</th>
                @endif
            </tr>
        </thead>
        <tbody>
            @foreach($jobLocations as $jobLocation)
            <tr>
                <td>{{ $jobLocation->location }}</td>
                <td>{{ $jobLocation->sub_district }}</td>
                <td>
                    <a href="{{ $jobLocation->setpoint }}" target="_blank" rel="noopener noreferrer">{{ $jobLocation->setpoint }}</a>
                </td>
                @if(Auth::user()->user_type == 'Super Admin')
                <td>
                    <a href="{{ route('jobLocations.edit', $jobLocation) }}" class="btn btn-primary">Ubah</a>
                    <form method="POST" action="{{ route('jobLocations.destroy', $jobLocation) }}" onsubmit="return confirm('Apakah Anda yakin ingin menghapus?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
                @endif
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