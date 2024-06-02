@extends('layouts.kalogakbisa')

@section('content')
    <div class="container-fluid py-4 px-5">
        <div class="row">
            <div class="col-12">
                <div class="card border shadow-xs mb-4 px-2">
                    <form action="" method="get">
                        <div class='form-group'>
                            <label for='test_id'>Test</label>
                            <select name='test_id' id='test_id' class='form-control @error('test_id') is-invalid @enderror'>
                                <option value='' selected>Semua</option>
                                @foreach ($data_test as $test)
                                    <option @selected($test->id == request('test_id')) value='{{ $test->id }}'>{{ $test->nama_test }}
                                    </option>
                                @endforeach
                            </select>
                            @error('test_id')
                                <div class='invalid-feedback'>
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class='form-group'>
                            <label for='penduduk_id'>Penduduk</label>
                            <select name='penduduk_id' id='penduduk_id'
                                class='form-control @error('penduduk_id') is-invalid @enderror'>
                                <option value='' selected>Semua</option>
                                @foreach ($data_penduduk as $penduduk)
                                    <option @selected($penduduk->id == request('penduduk_id')) value='{{ $penduduk->id }}'>
                                        {{ $penduduk->namalengkap . ' | No. KTP : ' . $penduduk->No_ktp }}
                                    </option>
                                @endforeach
                            </select>
                            @error('penduduk_id')
                                <div class='invalid-feedback'>
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group ">
                            <div class="float-right">
                                <button class="btn btn-sm btn-secondary">Filter</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card border shadow-xs mb-4">
                    <div class="card-header border-bottom pb-0">
                        <div class="d-sm-flex align-items-center">
                            <div>
                                <h6 class="font-weight-semibold text-lg mb-0">Riwayat Hasil Test</h6>
                                <p class="text-sm">See information about Riwayat Hasil Test</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-2">
                        <div class="table-responsive p-0">
                            <table id="dtTable" class="table mb-0">
                                <thead class="bg-gray-100">
                                    <tr>
                                        <th class="text-secondary text-xs opacity-7">Penduduk</th>
                                        <th class="text-secondary text-xs opacity-7">No. KTP</th>
                                        <th class="text-secondary text-xs opacity-7">Nama Test</th>
                                        <th class="text-secondary text-xs opacity-7">Tanggal Pelaksana</th>
                                        <th class="text-secondary text-xs opacity-7">Tempat Pelaksana</th>
                                        <th class="text-secondary text-xs opacity-7">Anggota Test</th>
                                        <th class="text-secondary text-xs opacity-7">Rata-rata</th>
                                        <th class="text-secondary text-xs opacity-7">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="">
                                    @foreach ($items as $item)
                                        <tr>
                                            <td class="text-secondary text-xs opacity-7">{{ $item->penduduk->namalengkap }}
                                            </td>
                                            <td class="text-secondary text-xs opacity-7">{{ $item->penduduk->No_ktp }}
                                            </td>
                                            <td class="text-secondary text-xs opacity-7">{{ $item->test->nama_test }}
                                            </td>
                                            <td class="text-secondary text-xs opacity-7">
                                                {{ $item->test->tanggal_pelaksanaan }}
                                            </td>
                                            <td class="text-secondary text-xs opacity-7">
                                                {{ $item->test->tempat_pelaksanaan }}
                                            </td>
                                            <td class="text-secondary text-xs opacity-7">{{ $item->test->anggota_test }}
                                            </td>
                                            <td class="text-secondary text-xs opacity-7">{{ $item->rata_rata() }}
                                            </td>
                                            <td class="text-secondary text-xs opacity-7">
                                                <a href="{{ route('admin.riwayat-test.show', $item->id) }}"
                                                    class="btn btn-sm btn-info">Detail</a>
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
