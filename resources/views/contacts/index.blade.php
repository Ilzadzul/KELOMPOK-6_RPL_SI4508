@extends('layouts.kalogakbisa')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Daftar Kontak</div>

                <div class="card-body">
                    <a href="{{ route('contacts.create') }}" class="btn btn-primary">Tambah Kontak Baru</a>
                    <br/><br/>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Wilayah Bertugas</th>
                                <th>Jabatan</th>
                                <th>Nomor Telepon</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($contacts as $contact)
                            <tr>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->region }}</td>
                                <td>{{ $contact->position }}</td>
                                <td>{{ $contact->phone_number }}</td>
                                <td>
                                    <a href="{{ route('contacts.edit', $contact) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('contacts.destroy', $contact) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection