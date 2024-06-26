@extends('layouts.kalogakbisa')

@section('content')
    <div class="container-fluid py-4 px-5">
        <div class="row">
            <div class="col-12">
                <div class="card border shadow-xs mb-4">
                    <div class="card-header border-bottom pb-0">
                        <div class="d-sm-flex align-items-center">
                            <div>
                                <h6 class="font-weight-semibold text-lg mb-0">Tambah Detail Test Uji Kemampuan</h6>
                                {{-- <p class="text-sm">See information about all members</p> --}}
                            </div>
                            <div class="ms-auto d-flex">
                                <a href="{{ route('admin.test-uji-kemampuan-detail.index', [
                                    'test_uji_kemampuan_id' => $test_uji_kemampuan->id,
                                ]) }}"
                                    class="btn btn-primary">Kembali</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-2">
                        <form action="{{ route('admin.test-uji-kemampuan-detail.store') }}" method="post">
                            @csrf
                            <input type="text" name="test_uji_kemampuan_id" value="{{ $test_uji_kemampuan->id }}" hidden>
                            <div class='form-group mb-3'>
                                <label for='nama' class='mb-2'>Nama Detail</label>
                                <input type='text' name='nama' id='nama'
                                    class='form-control @error('nama') is-invalid @enderror' value='{{ old('nama') }}'>
                                @error('nama')
                                    <div class='invalid-feedback'>
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary">Tambah Data</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('assets/datatables.net/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
    <script>
        $(function() {
            $('#dtTable').DataTable();
        })
    </script>
@endsection
