@extends('layouts.kalogakbisa')

@section('content')
    <div class="container-fluid py-4 px-5">

        <div class="row">
            <div class="col-5">
                <div class="card border shadow-xs mb-4">
                    <div class="card-header border-bottom pb-0">
                        <div class="d-sm-flex align-items-center">
                            <div>
                                <h6 class="font-weight-semibold text-lg mb-0">Detail Hasil Test</h6>
                                <p class="text-sm">See information about Detail hasil test</p>
                            </div>
                            <div class="ms-auto d-flex">
                                <a href="{{ route('admin.riwayat-test.index') }}" class="btn btn-warning mx-3 ">Kembali</a>

                            </div>
                        </div>
                    </div>
                    <div class="card-body px-2">
                        <table class="table table-borderless">
                            <tr>
                                <th>Nama Penduduk</th>
                                <td> : </td>
                                <td>{{ $item->penduduk->namalengkap }}</td>
                            </tr>
                            <tr>
                                <th>No. KTP</th>
                                <td> : </td>
                                <td>{{ $item->penduduk->No_ktp }}</td>
                            </tr>
                            <tr>
                                <th>No. Telepon</th>
                                <td> : </td>
                                <td>{{ $item->penduduk->phonenumber }}</td>
                            </tr>
                            <tr>
                                <th>Nama Test</th>
                                <td> : </td>
                                <td>{{ $item->test->nama_test }}</td>
                            </tr>
                            <tr>
                                <th>Tanggal Pelaksanaan</th>
                                <td> : </td>
                                <td>{{ $item->test->tanggal_pelaksanaan }}</td>
                            </tr>
                            <tr>
                                <th>Anggota Test</th>
                                <td> : </td>
                                <td>{{ $item->test->anggota_test }}</td>
                            </tr>
                            <tr>
                                <th>Rata-rata</th>
                                <td> : </td>
                                <td>{{ $item->rata_rata() }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border shadow-xs mb-4">
                    <div class="card-header border-bottom pb-0">
                        <div class="d-sm-flex align-items-center">
                            <div>
                                <h6 class="font-weight-semibold text-lg mb-0">Test Uji Kemampuan Detail</h6>
                                <p class="text-sm">See information about Test Uji Kemampuan Detail</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-2">
                        <div class="table-responsive p-0">
                            <table id="dtTable" class="table mb-0">
                                <thead class="bg-gray-100">
                                    <tr>
                                        <th class="text-secondary text-xs opacity-7">Detail</th>
                                        <th class="text-secondary text-xs opacity-7">Nilai</th>
                                        {{-- <th class="text-secondary text-xs opacity-7">Aksi</th> --}}
                                    </tr>
                                </thead>
                                <tbody class="">
                                    @foreach ($item->details as $detail)
                                        <tr>
                                            <td class="text-secondary text-xs opacity-7">
                                                {{ $detail->test_detail->nama }}</td>
                                            <td class="text-secondary text-xs opacity-7">{{ $detail->nilai }}
                                            </td>
                                            {{-- <td class="text-secondary text-xs opacity-7">
                                                <a href="{{ route('admin.test-uji-kemampuan-detail.edit', $detail->id) }}"
                                                    class="btn btn-sm btn-info">Edit</a>
                                                <form
                                                    action="{{ route('admin.test-uji-kemampuan-detail.destroy', $detail->id) }}"
                                                    method="post" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-sm btn-danger">Hapus</button>
                                                </form>
                                            </td> --}}
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
