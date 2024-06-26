@extends('layouts.kalogakbisa')

@section('content')
    <div class="container-fluid py-4 px-5">
        <div class="row">
            <div class="col-12">
                <div class="card border shadow-xs mb-4">
                    <div class="card-header border-bottom pb-0">
                        <div class="d-sm-flex align-items-center">
                            <div>
                                <h6 class="font-weight-semibold text-lg mb-0">Edit Detail Test Uji Kemampuan</h6>
                                {{-- <p class="text-sm">See information about all members</p> --}}
                            </div>
                            <div class="ms-auto d-flex">
                                <a href="{{ route('admin.test-uji-kemampuan-detail.index', [
                                    'test_uji_kemampuan_id' => $item->test_uji_kemampuan->id,
                                ]) }}"
                                    class="btn btn-primary">Kembali</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-2">
                        <form action="{{ route('admin.test-uji-kemampuan-detail.update', $item->id) }}" method="post">
                            @csrf
                            @method('patch')
                            <div class='form-group mb-3'>
                                <label for='nama' class='mb-2'>Nama Detail</label>
                                <input type='text' name='nama' id='nama'
                                    class='form-control @error('nama') is-invalid @enderror'
                                    value='{{ $item->nama ?? old('nama') }}'>
                                @error('nama')
                                    <div class='invalid-feedback'>
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary">Update Data</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
