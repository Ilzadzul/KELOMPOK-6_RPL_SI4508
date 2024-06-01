@extends('layouts.kalogakbisa')
@section('content')
<div class="container-fluid py-4 px-5">
    <div class="row">
        <div class="col-12">
            <div class="card border shadow-xs mb-4">
                <div class="card-header border-bottom pbb-0">
                    <div class="d-sm-flex align-items-center">
                        <div>
                            <h6 class="font-weight-semibold text-lg mb-0">Tambah Kelurahan</h6>
                            <p class="text-sm">Isi informasi di bawah ini</p>
                        </div>
                        <div class="ms-auto d-flex">
                        </div>
                    </div>
                </div>
                <form action="{{ route('kelurahan.store') }}" method="POST">
                    @csrf
                    <div class="card-body px-0 py-0">
                        <div class="table-responsive p-0">
                            {{-- <form method="POST" action="{{ route('tambahadmin.store') }}"> --}}
                            {{-- <form method="POST" action="{{ route('tambahadmin.store') }}"> --}}
                                @csrf
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-2 col-form-label">Nama kelurahan</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Kelurahan A" value="{{ old('name') }}">
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                                        <div class="col-sm-12">
                                            <textarea class="form-control @error('deskripsi') is-invalid @enderror"name="deskripsi" id="deskripsi" placeholder="Kelurahan A merupakan" value="{{ old('deskripsi') }}"></textarea>
                                            @error('deskripsi')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="{{ route('kelurahan.index') }}" class="btn btn-secondary">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
    <!-- Include SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- Script untuk menampilkan SweetAlert setelah berhasil menambahkan admin -->
    @if(session('success'))
        <script>
            Swal.fire({
                title: 'Berhasil!',
                text: '{{ session('success') }}',
                icon: 'success',
                confirmButtonText: 'OK'
            });
        </script>
    @endif
@endsection
