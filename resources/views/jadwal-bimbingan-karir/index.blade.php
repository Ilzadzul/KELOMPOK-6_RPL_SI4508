@extends('layouts.kalogakbisa')

@section('content')
    <div class="container-fluid py-4 px-5">
        <div class="row">
            <div class="col-12">
                <div class="card border shadow-xs mb-4">
                    <div class="card-header border-bottom pb-0">
                        <div class="d-sm-flex align-items-center">
                            <div>
                                <h6 class="font-weight-semibold text-lg mb-0">Jadwal Bimbingan Karir</h6>
                                <p class="text-sm">See information about jadwal bimbingan karir</p>
                            </div>
                            <div class="ms-auto d-flex">
                                <a href="{{ route('admin.jadwal-bimbingan-karir.create') }}" class="btn btn-primary">Tambah
                                    Data</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-2">
                        <div class="table-responsive p-0">
                            <table id="dtTable" class="table mb-0">
                                <thead class="bg-gray-100">
                                    <tr>
                                        <th class="text-secondary text-xs opacity-7">Nama Lengkap</th>
                                        <th class="text-secondary text-xs opacity-7">No. KTP</th>
                                        <th class="text-secondary text-xs opacity-7">Tempat</th>
                                        <th class="text-secondary text-xs opacity-7">Waktu</th>
                                        <th class="text-secondary text-xs opacity-7">Mentor</th>
                                        <th class="text-secondary text-xs opacity-7">Status</th>
                                        <th class="text-secondary text-xs opacity-7">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="">
                                    @foreach ($items as $item)
                                        <tr>
                                            <td class="text-secondary text-xs opacity-7">
                                                {{ $item->penduduk->namalengkap }}</td>
                                            <td class="text-secondary text-xs opacity-7">{{ $item->penduduk->No_ktp }}</td>
                                            <td class="text-secondary text-xs opacity-7">{{ $item->tempat }}</td>
                                            <td class="text-secondary text-xs opacity-7">
                                                {{ $item->waktu->translatedFormat('d F Y H:i') }}</td>
                                            <td class="text-secondary text-xs opacity-7">{{ $item->nama_mentor }}</td>
                                            <td class="text-secondary text-xs opacity-7">{!! $item->status() !!}</td>
                                            <td class="text-secondary text-xs opacity-7">
                                                <a href="{{ route('admin.jadwal-bimbingan-karir.edit', $item->id) }}"
                                                    class="btn btn-sm btn-info">Edit</a>
                                                <form
                                                    action="{{ route('admin.jadwal-bimbingan-karir.destroy', $item->id) }}"
                                                    method="post" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-sm btn-danger">Hapus</button>
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
