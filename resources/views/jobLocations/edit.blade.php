@extends('layouts.kalogakbisa')
@section('content')
<div class="container" style="border: 2px solid #f2f2f2; padding: 20px; margin-left: 55px; border-radius: 10px; background-color: #f2f2f2; box-shadow: 5px 5px 15px rgba(0,0,0,0.3);">
    <h1 style="text-align: center; font-size: 40px;">Edit Job Location</h1>
    <form method="POST" action="{{ route('jobLocations.update', $jobLocation) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="location">Kecamatan</label>
            <input type="text" class="form-control" id="location" name="location" value="{{ $jobLocation->location }}">
        </div>
        <div class="form-group">
            <label for="sub_district">Kelurahan</label>
            <input type="text" class="form-control" id="sub_district" name="sub_district" value="{{ $jobLocation->sub_district }}">
        </div>
        <div class="form-group">
            <label for="setpoint">Link Map</label>
            <input type="text" class="form-control" id="setpoint" name="setpoint" value="{{ $jobLocation->setpoint }}">
        </div>
        <button type="submit" class="btn btn-primary">Ubah</button>
    </form>
</div>

<div class="container mt-4">
    <div class="row">
        <div class="col text-center">
            <a href="{{ url('/jobLocations') }}" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>
@endsection