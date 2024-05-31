@extends('layouts.kalogakbisa')

@section('content')
<head>
    <link id="" href="/assets/css/custom.css" rel="stylesheet" />
</head>
<body>
    <div class="container-fluid py-4 px-5">
        <div class="row">
            <div class="col-12">
                <div class="card border shadow-xs mb-4">
                    <div class="card-header border-bottom pb-0">
                        <div class="d-sm-flex align-items-center">
                            <div>
                                <h6 class="font-weight-semibold text-lg mb-0">Wilayah Terkait</h6>
                                <p class="text-sm">Ringkasan persebaran data penduduk di aplikasi Get-in
                                    berdasarkan pengelompokkan kelurahan. Click List kelurahan untuk edit atau delete kelurahan</p>
                            </div>
                            <a href="/tambahkelurahan" class="btn btn-sm btn-dark btn-icon d-flex align-items-center ms-10">
                                <span class="btn-inner--text">Add Kelurahan</span>
                            </a>
                        </div>
                    </div>
                    <button class="accordion" style="margin: 15px;">List kelurahan</button>
                    <div class="panel">
                        <div class="table-responsive">
                            <table id="genderTable" class="align-items-center">
                                <thead class="bg-gray-100">
                                    <tr>
                                        <th class="text-secondary text-xs font-weight-semibold opacity-7" style="width: 3%">ID</th>
                                        <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2" style="width: 30%">Name</th>
                                        <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2" style="width: 40%">Deskripsi</th>
                                        <th class="text-secondary opacity-7"></th>
                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kelurahans as $kelurahan)
                                    <tr>
                                        <td>
                                            <p class="text-sm text-dark font-weight-semibold mb-0">{{ $kelurahan->id }}</p>
                                        </td>
                                        <td>
                                            <p class="text-sm text-dark font-weight-semibold mb-0">{{ $kelurahan->name }}</p>
                                        </td>
                                        <td>
                                            <p class="text-sm text-dark font-weight-semibold mb-0">{{ $kelurahan->deskripsi }}</p>
                                        </td>
                                        <td>
                                            <form action="{{ route('editkelurahan', $kelurahan->id) }}" method="GET">
                                                @csrf
                                                <button type="submit" class="btn btn-primary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16" style="margin-right: 10px;">
                                                        <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708z"/>
                                                    </svg>
                                                    Edit
                                                </button>
                                            </form>
                                        </td>
                                        <td>
                                            <form action="{{ route('deletekelurahan', $kelurahan->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16" style="margin-right: 10px;">
                                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                                        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                                                    </svg>
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-body px-0 py-0">
                        @foreach ($pendudukGroupedByKelurahan as $kelurahan => $penduduks)
                            <button class="accordion" style="margin: 15px;">
                                {{ $kelurahan }} <span class="text-muted small"><small>({{ count($penduduks) }} data)</small></span>
                            </button>
                            <div class="panel">
                                <div class="ms-auto d-flex">
                                    <button onclick="filterRows('all')" class="btn btn-sm btn-dark me-2">All</button>
                                    <button onclick="filterRows('pria')" class="btn btn-sm btn-dark me-2">Pria</button>
                                    <button onclick="filterRows('wanita')" class="btn btn-sm btn-dark me-2">Wanita</button>
                                </div>
                                <div class="table-responsive">
                                    <table id="genderTable" class="align-items-center" >
                                        <thead class="bg-gray-100">
                                            <tr>
                                                <th class="text-secondary text-xs font-weight-semibold opacity-7">Nama</th>
                                                <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">TTL</th>
                                                <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Gender</th>
                                                <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">NIK</th>
                                                <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Pendidikan</th>
                                                <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Pengalaman Kerja</th>
                                                <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Bidang</th>
                                                <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Tahun</th>
                                                <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Posisi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($penduduks as $penduduk)
                                            <tr class="data-row" data-gender="{{ strtolower($penduduk->gender) }}">
                                                <td>
                                                    <p class="text-sm text-dark font-weight-semibold mb-0">{{ $penduduk->namalengkap }}</p>
                                                </td>
                                                <td>
                                                    <p class="text-sm text-dark font-weight-semibold mb-0">{{ $penduduk->TTL }}</p>
                                                </td>
                                                <td>
                                                    <p class="text-sm text-dark font-weight-semibold mb-0">{{ $penduduk->gender }}</p>
                                                </td>
                                                <td>
                                                    <p class="text-sm text-dark font-weight-semibold mb-0">{{ $penduduk->No_ktp }}</p>
                                                </td>
                                                <td>
                                                    <p class="text-sm text-dark font-weight-semibold mb-0">{{ $penduduk->pendidikan }}</p>
                                                </td>
                                                <td>
                                                    <p class="text-sm text-dark font-weight-semibold mb-0">{{ $penduduk->pengalaman }}</p>
                                                </td>
                                                <td>
                                                    <p class="text-sm text-dark font-weight-semibold mb-0">{{ $penduduk->bidang }}</p>
                                                </td>
                                                <td>
                                                    <p class="text-sm text-dark font-weight-semibold mb-0">{{ $penduduk->tahun }}</p>
                                                </td>
                                                <td>
                                                    <p class="text-sm text-dark font-weight-semibold mb-0">{{ $penduduk->posisi }}</p>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/assets/js/custom.js"></script>
    </body>
@endsection
