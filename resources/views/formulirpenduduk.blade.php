@extends('layouts.kalogakbisa')
@section('content')

    <div class="card mb-3 m-lg-6 p-4"> 
      <form class=>
        <div class="card mb-3 m-lg-6 p-8 shadow-none" style="background-color: #F3FAFF;">
          <h3 class="text-center">Formulir Data Penduduk</h3>
          <h5>Step 1 : Melengkapi Data Diri</h5>
          <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Lengkap</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="inputEmail3">
            </div>
          <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">TTL</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="inputEmail3">
            </div>
          <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="inputEmail3">
            </div>
          <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="inputEmail3">
            </div>
          <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Nomor Telepon</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="inputEmail3">
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">NIK</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="inputPassword3">
            </div>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary mr-2">Save</button>
            <button type="button" class="btn btn-secondary" style="background-color: #DDE2E5; color: #8D8D8D" >Cancel</button>
        </div>
        </form>
        
      </div>


@endsection