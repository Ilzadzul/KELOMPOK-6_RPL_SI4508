@extends('layouts.kalogakbisa')

@section('content')
    {{-- <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;"></a>??perlu ga?</li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Home</li>
        </ol>
        <h6 class="font-weight-bolder text-white mb-0">Dashboard</h6>
        </nav>
    </div> --}}
    <div class="container-fluid py-4">
    <div class="row">
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <!-- 4 kotak atas ---->
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <h5 class="font-weight-bolder">Riwayat</h5>
                  <p class="mb-0">lihat aktivitas sebelumnya</p>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                  <i class="ni ni-time-alarm text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <h5 class="font-weight-bolder">Inbox</h5>
                  <p class="mb-0">
                    <span class="text-danger text-sm font-weight-bolder">+3</span>
                    pesan belum dibaca
                  </p>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                  <i class="ni ni-email-83 text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                <h5 class="font-weight-bolder">Database Penduduk</h5>
                  <p class="mb-0">Lihat Database</p>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                  <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <h5 class="font-weight-bolder">Bimbingan Karir</h5>
                  <p class="mb-0">Lihat Course</p>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                  <i class="ni ni-briefcase-24 text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- pbi 10 -->
    
<!-- pbi 11 selesai -->
    
    <div class="row mt-4">
      <!-- <div class="col-lg-7 mb-lg-0 mb-4">
        <div class="card ">
          <div class="card-header pb-0 p-3">
            <div class="d-flex justify-content-between">
              <h6 class="mb-2">Lowongan Pekerjaan</h6>
            </div>
          </div>
          <div class="table-responsive">
            <table class="table align-items-center ">
              <tbody>
                
                <tr>
                  <td class="w-30">
                    <div class="d-flex px-2 py-1 align-items-center">
                      <div class="ms-4">
                        <p class="text-xs font-weight-bold mb-0">Kategori Pekerjaan:</p>
                        <h6 class="text-sm mb-0">Teknologi</h6>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="text-center">
                      <p class="text-xs font-weight-bold mb-0">Jumlah Lowongan:</p>
                      <h6 class="text-sm mb-0">120</h6>
                    </div>
                  </td>
                  <td>
                    <div class="text-center">
                      <p class="text-xs font-weight-bold mb-0">Persentase dari Total:</p>
                      <h6 class="text-sm mb-0">30%</h6>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="w-30">
                    <div class="d-flex px-2 py-1 align-items-center">
                      <div class="ms-4">
                        <p class="text-xs font-weight-bold mb-0">Kategori Pekerjaan:</p>
                        <h6 class="text-sm mb-0">Keuangan</h6>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="text-center">
                      <p class="text-xs font-weight-bold mb-0">Jumlah Lowongan:</p>
                      <h6 class="text-sm mb-0">80</h6>
                    </div>
                  </td>
                  <td>
                    <div class="text-center">
                      <p class="text-xs font-weight-bold mb-0">Persentase dari Total:</p>
                      <h6 class="text-sm mb-0">20%</h6>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="w-30">
                    <div class="d-flex px-2 py-1 align-items-center">
                      <div class="ms-4">
                        <p class="text-xs font-weight-bold mb-0">Kategori Pekerjaan:</p>
                        <h6 class="text-sm mb-0">Pendidikan</h6>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="text-center">
                      <p class="text-xs font-weight-bold mb-0">Jumlah Lowongan:</p>
                      <h6 class="text-sm mb-0">50</h6>
                    </div>
                  </td>
                  <td>
                    <div class="text-center">
                      <p class="text-xs font-weight-bold mb-0">Persentase dari Total:</p>
                      <h6 class="text-sm mb-0">12.5%</h6>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td class="w-30">
                    <div class="d-flex px-2 py-1 align-items-center">
                      <div class="ms-4">
                        <p class="text-xs font-weight-bold mb-0">Kategori Pekerjaan:</p>
                        <h6 class="text-sm mb-0">Kesehatan</h6>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="text-center">
                      <p class="text-xs font-weight-bold mb-0">Jumlah Lowongan:</p>
                      <h6 class="text-sm mb-0">50</h6>
                    </div>
                  </td>
                  <td>
                    <div class="text-center">
                      <p class="text-xs font-weight-bold mb-0">Persentase dari Total:</p>
                      <h6 class="text-sm mb-0">12.5%</h6>
                    </div>
                  </td>
                </tr>


              </tbody>
            </table>
          </div>
        </div> -->
      </div>
      
      
      <div class="col-lg-5">
    <div class="card">
        <div class="card-header pb-0 p-3">
            <h6 class="mb-0">Categories</h6>
        </div>
        <div class="card-body p-3">
            <ul class="list-group">
                @php
                    $categories = ['Teknologi', 'Keuangan', 'Pendidikan', 'Kesehatan'];
                    $icons = ['ni ni-laptop', 'ni ni-briefcase-24', 'ni ni-hat-3', 'ni ni-ambulance'];
                @endphp

                @foreach($categories as $index => $category)
                    @php
                        $count = \App\Models\Job::where('category', $category)->count();
                    @endphp
                    <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                        <div class="d-flex align-items-center">
                            <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                                <i class="{{ $icons[$index] }} text-white opacity-10"></i>
                            </div>
                            <div class="d-flex flex-column">
                                <h6 class="mb-1 text-dark text-sm">{{ $category }}</h6>
                                <span class="text-xs">{{ $count }} Lowongan Pekerjaan</span>
                            </div>
                        </div>
                        <div class="d-flex">
                            <a href="/jobs" class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto">
                                <i class="ni ni-bold-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
    </div>
    {{-- @include('layouts.partial.footer') --}}
  </div>

@endsection