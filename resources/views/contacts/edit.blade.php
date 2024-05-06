@extends('layouts.kalogakbisa')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Kontak</div>

                <div class="card-body">
                    <form action="{{ route('contacts.update', $contact) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="name" value="{{ $contact->name }}" required>
                        </div>
                        <div class="form-group">
                            <label>Wilayah Bertugas</label>
                            <input type="text" class="form-control" name="region" value="{{ $contact->region }}" required>
                        </div>
                        <div class="form-group">
                            <label>Jabatan</label>
                            <input type="text" class="form-control" name="position" value="{{ $contact->position }}" required>
                        </div>
                        <div class="form-group">
                            <label>Nomor Telepon</label>
                            <input type="text" class="form-control" name="phone_number" value="{{ $contact->phone_number }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ route('contacts.index') }}" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection