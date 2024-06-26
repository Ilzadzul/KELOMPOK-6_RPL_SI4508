@extends('layouts.kalogakbisa')

@section('content')
    <div class="container-fluid py-4 px-5">
        <div class="row">
            <div class="col-12">
                <div class="card border shadow-xs mb-4">
                    <div class="card-header border-bottom pb-0">
                        <div class="d-sm-flex align-items-center">
                            <div>
                                <h6 class="font-weight-semibold text-lg mb-0">Edit Jadwal Bimbingna Karir</h6>
                                {{-- <p class="text-sm">See information about all members</p> --}}
                            </div>
                            <div class="ms-auto d-flex">
                                <a href="{{ route('admin.jadwal-bimbingan-karir.index') }}"
                                    class="btn btn-primary">Kembali</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-2">
                        <form action="{{ route('admin.jadwal-bimbingan-karir.update', $item->id) }}" method="post">
                            @csrf
                            @method('patch')
                            <div class='form-group mb-3'>
                                <label for='' class='mb-2'>Nama Lengkap <span class='text-danger'>*</span></label>
                                <input type='text' name='' id=''
                                    class='form-control @error('') is-invalid @enderror'
                                    value='{{ $item->penduduk->namalengkap }}' readonly>
                                @error('')
                                    <div class='invalid-feedback'>
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class='form-group mb-3'>
                                <label for='' class='mb-2'>No. KTP <span class='text-danger'>*</span></label>
                                <input type='text' name='' id=''
                                    class='form-control @error('') is-invalid @enderror'
                                    value='{{ $item->penduduk->No_ktp }}' readonly>
                                @error('')
                                    <div class='invalid-feedback'>
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class='form-group mb-3'>
                                <label for='waktu' class='mb-2'>Waktu <span class='text-danger'>*</span></label>
                                <input type='datetime-local' name='waktu' id='waktu'
                                    class='form-control @error('waktu') is-invalid @enderror' value='{{ $item->waktu }}'>
                                @error('waktu')
                                    <div class='invalid-feedback'>
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class='form-group mb-3'>
                                <label for='tempat' class='mb-2'>Tempat <span class='text-danger'>*</span></label>
                                <input type='text' name='tempat' id='tempat'
                                    class='form-control @error('tempat') is-invalid @enderror' value='{{ $item->tempat }}'>
                                @error('tempat')
                                    <div class='invalid-feedback'>
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class='form-group mb-3'>
                                <label for='nama_mentor' class='mb-2'>Nama Mentor <span
                                        class='text-danger'>*</span></label>
                                <input type='text' name='nama_mentor' id='nama_mentor'
                                    class='form-control @error('nama_mentor') is-invalid @enderror'
                                    value='{{ $item->nama_mentor }}'>
                                @error('nama_mentor')
                                    <div class='invalid-feedback'>
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class='form-group'>
                                <label for='status'>Status <span class='text-danger'>*</span></label>
                                <select name='status' id='status'
                                    class='form-control @error('status') is-invalid @enderror'>
                                    <option value='' selected disabled>Pilih Status</option>
                                    <option @selected($item->status === 'scheduled') value="scheduled">Dijadwalkan</option>
                                    <option @selected($item->status === 'completed') value="completed">Selesai</option>
                                    <option @selected($item->status === 'canceled') value="canceled">Dibatalkan</option>
                                    <option @selected($item->status === 'rescheduled') value="rescheduled">Dijadwal Ulang</option>
                                    <option @selected($item->status === 'in_progress') value="in_progress">Sedang Berlangsung</option>
                                    <option @selected($item->status === 'no_show') value="no_show">Tidak Hadir</option>
                                    <option @selected($item->status === 'pending') value="pending">Tertunda</option>
                                </select>
                                @error('status')
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
@section('scripts')
    <script src="{{ asset('assets/datatables.net/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
    <script>
        $(function() {
            $('#dtTable').DataTable();
        })
    </script>
@endsection
