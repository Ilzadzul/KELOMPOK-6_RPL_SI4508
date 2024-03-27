@extends('layouts.master')
@section('content')
        <div class="container-fluid py-4">
        <div class="row">
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                    <h6>Database Akun</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            {{-- <colgroup>
                                <col style="width: 25%;"> <!-- Adjust the width of the "Nama" column -->
                                <col style="width: 20%;"> <!-- Adjust the width of the "Function" column -->
                                <col style="width: 25%;"> <!-- Adjust the width of the "Username" column -->
                                <col style="width: 5%;"> <!-- Adjust the width of the "Email" column -->
                                <col style="width: 10%;"> <!-- Adjust the width of the last column as needed -->
                            </colgroup> --}}

                        <thead>
                            <tr>
                            <th style="width: 20%"class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                            <th style="width: 10%"class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Function</th>
                            <th style="width: 20%" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Username</th>
                            <th style="width: 2%" class="text-secondary opacity-7"></th>
                            <th style="width: 10%" class="text-secondary opacity-7"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                {{-- <div>
                                    <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                                </div> --}}
                                <div class="d-flex flex-column justify-content-center">
                                    <p class="text-xs font-weight-bold mb-0">John Michael</p>
                                    {{-- <p class="text-xs text-secondary mb-0">john@creative-tim.com</p> --}}
                                </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-xs font-weight-bold mb-0">Manager</p>
                                {{-- <p class="text-xs text-secondary mb-0">Organization</p> --}}
                            </td>
                            <td class="">
                                {{-- <span class="badge badge-sm bg-gradient-success">Online</span> --}}
                                <p class="text-xs font-weight-bold mb-0">JohnTeknisiiiii</p>
                            </td>
                            {{-- <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                            </td> --}}
                            <td class="align-left">
                                <a href="javascript:;" class="badge badge-sm bg-gradient-success" data-toggle="tooltip" data-original-title="Edit user">
                                Edit
                                </a>
                            </td>
                            <td class="">
                                <a href="javascript:;" class="badge badge-sm bg-gradient-secondary" data-toggle="tooltip" data-original-title="Edit user">
                                Hapus
                                </a>
                            </td>

                            </tr>
                            <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                {{-- <div>
                                    <img src="../assets/img/team-3.jpg" class="avatar avatar-sm me-3" alt="user2">
                                </div> --}}
                                <div class="d-flex flex-column justify-content-center">
                                    <p class="text-xs font-weight-bold mb-0">Alexa Liras</p>
                                    {{-- <p class="text-xs text-secondary mb-0">alexa@creative-tim.com</p> --}}
                                </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-xs font-weight-bold mb-0">Programator</p>
                                {{-- <p class="text-xs text-secondary mb-0">Developer</p> --}}
                            </td>
                            <td class="">
                                <p class="text-xs font-weight-bold mb-0">AlexaTeknisi</p>
                            </td>
                            {{-- <td class="align-middle text-center">
                                {{-- <span class="text-secondary text-xs font-weight-bold">john@creative-tim.com</span>
                            </td> --}}
                            <td class="align-left">
                                <a href="javascript:;" class="badge badge-sm bg-gradient-success" data-toggle="tooltip" data-original-title="Edit user">
                                Edit
                                </a>
                            </td>
                            <td class="">
                                <a href="javascript:;" class="badge badge-sm bg-gradient-secondary" data-toggle="tooltip" data-original-title="Edit user">
                                Hapus
                                </a>
                            </td>
                            </tr>
                            <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                {{-- <div>
                                    <img src="../assets/img/team-4.jpg" class="avatar avatar-sm me-3" alt="user3">
                                </div> --}}
                                <div class="d-flex flex-column justify-content-center">
                                    <p class="text-xs font-weight-bold mb-0">Laurent Perrier</p>
                                    {{-- <p class="text-xs text-secondary mb-0">laurent@creative-tim.com</p> --}}
                                </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-xs font-weight-bold mb-0">Executive</p>
                                {{-- <p class="text-xs text-secondary mb-0">Projects</p> --}}
                            </td>
                            <td class="">
                                {{-- <span class="badge badge-sm bg-gradient-success">Online</span> --}}
                                <p class="text-xs font-weight-bold mb-0">LaurentProgrmmer</p>
                            </td>
                            <td class="align-left">
                                <a href="javascript:;" class="badge badge-sm bg-gradient-success" data-toggle="tooltip" data-original-title="Edit user">
                                Edit
                                </a>
                            </td>
                            <td class="">
                                <a href="javascript:;" class="badge badge-sm bg-gradient-secondary" data-toggle="tooltip" data-original-title="Edit user">
                                Hapus
                                </a>
                            </td>
                            </tr>
                            <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                {{-- <div>
                                    <img src="../assets/img/team-3.jpg" class="avatar avatar-sm me-3" alt="user4">
                                </div> --}}
                                <div class="d-flex flex-column justify-content-center">
                                    <p class="text-xs font-weight-bold mb-0">Michael Levi</p>
                                    {{-- <p class="text-xs text-secondary mb-0">michael@creative-tim.com</p> --}}
                                </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-xs font-weight-bold mb-0">Programator</p>
                                {{-- <p class="text-xs text-secondary mb-0">Developer</p> --}}
                            </td>
                            {{-- <td class="align-middle text-center text-sm">
                                <span class="badge badge-sm bg-gradient-success">Online</span>
                            </td> --}}
                            <td class="">
                                {{-- <span class="badge badge-sm bg-gradient-success">Online</span> --}}
                                <p class="text-xs font-weight-bold mb-0">MichaelJackson</p>
                            </td>
                            <td class="align-left">
                                <a href="javascript:;" class="badge badge-sm bg-gradient-success" data-toggle="tooltip" data-original-title="Edit user">
                                Edit
                                </a>
                            </td>
                            <td class="">
                                <a href="javascript:;" class="badge badge-sm bg-gradient-secondary" data-toggle="tooltip" data-original-title="Edit user">
                                Hapus
                                </a>
                            </td>
                            </tr>
                            <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                {{-- <div>
                                    <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user5">
                                </div> --}}
                                <div class="d-flex flex-column justify-content-center">
                                    <p class="text-xs font-weight-bold mb-0">Richard Gran</p>
                                    {{-- <p class="text-xs text-secondary mb-0">richard@creative-tim.com</p> --}}
                                </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-xs font-weight-bold mb-0">Manager</p>
                                {{-- <p class="text-xs text-secondary mb-0">Executive</p> --}}
                            </td>
                            <td class="">
                                {{-- <span class="badge badge-sm bg-gradient-success">Online</span> --}}
                                <p class="text-xs font-weight-bold mb-0">GrandeS</p>
                            </td>
                            <td class="align-left">
                                <a href="javascript:;" class="badge badge-sm bg-gradient-success" data-toggle="tooltip" data-original-title="Edit user">
                                Edit
                                </a>
                            </td>
                            <td class="">
                                <a href="javascript:;" class="badge badge-sm bg-gradient-secondary" data-toggle="tooltip" data-original-title="Edit user">
                                Hapus
                                </a>
                            </td>
                            </tr>
                            <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                {{-- <div>
                                    <img src="../assets/img/team-4.jpg" class="avatar avatar-sm me-3" alt="user6">
                                </div> --}}
                                <div class="d-flex flex-column justify-content-center">
                                    <p class="text-xs font-weight-bold mb-0">Miriam Eric</p>
                                    {{-- <p class="text-xs text-secondary mb-0">miriam@creative-tim.com</p> --}}
                                </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-xs font-weight-bold mb-0">Programtor</p>
                                {{-- <p class="text-xs text-secondary mb-0">Developer</p> --}}
                            </td>
                            <td class="">
                                {{-- <span class="badge badge-sm bg-gradient-success">Online</span> --}}
                                <p class="text-xs font-weight-bold mb-0">MerimMerem</p>
                            </td>
                            {{-- <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">14/09/20</span>
                            </td> --}}
                            <td class="align-left">
                                <a href="javascript:;" class="badge badge-sm bg-gradient-success" data-toggle="tooltip" data-original-title="Edit user">
                                Edit
                                </a>
                            </td>
                            <td class="">
                                <a href="javascript:;" class="badge badge-sm bg-gradient-secondary" data-toggle="tooltip" data-original-title="Edit user">
                                Hapus
                                </a>
                            </td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </div>
            <!-- card dua -->
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-header">
                        <h6>Additional Card</h6>
                    </div>
                    <div class="card-body">
                        <!-- Add content -->
                        <p> This is additional content.</p>
                    </div>
                </div>
            </div>
        </div>
          @include('layouts.partial.footer')
        </div>
@endsection
