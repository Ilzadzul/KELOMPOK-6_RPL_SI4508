@extends('layouts.kalogakbisa')

@section('content')
    <div class="container-fluid py-4 px-5">
        <div class="row">
            <div class="col-12">
                <div class="card border shadow-xs mb-4">
                    <div class="card-header border-bottom pb-0">
                        <div class="d-sm-flex align-items-center">
                            <div>
                                <h6 class="font-weight-semibold text-lg mb-0">Test Uji Kemampuan</h6>
                                <p class="text-sm">See information about Test Uji Kemampuan</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-2">

                        <div class="table-responsive p-0">
                            <table id="dtTable" class="table mb-0">
                                <thead class="bg-gray-100">
                                    <tr>
                                        <th class="text-secondary text-xs opacity-7">Nama Test</th>
                                        <th class="text-secondary text-xs opacity-7">Tanggal Pelaksana</th>
                                        <th class="text-secondary text-xs opacity-7">Tempat Pelaksana</th>
                                        <th class="text-secondary text-xs opacity-7">Anggota Test</th>
                                        <th class="text-secondary text-xs opacity-7">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="">
                                    @foreach ($items as $item)
                                        <tr>
                                            <td class="text-secondary text-xs opacity-7">{{ $item->nama_test }}</td>
                                            <td class="text-secondary text-xs opacity-7">{{ $item->tanggal_pelaksanaan }}
                                            </td>
                                            <td class="text-secondary text-xs opacity-7">{{ $item->tempat_pelaksanaan }}
                                            </td>
                                            <td class="text-secondary text-xs opacity-7">{{ $item->anggota_test }}</td>
                                            <td class="text-secondary text-xs opacity-7">
                                                <a href="{{ route('admin.test-uji-kemampuan-detail.index', [
                                                    'test_uji_kemampuan_id' => $item->id,
                                                ]) }}"
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
