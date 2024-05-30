@extends('layouts.kalogakbisa')
@section('content')
<div class="container">
    <h1>Add New Job Location</h1>
    <form method="POST" action="{{ route('jobLocations.store') }}">
        @csrf
        <div class="form-group">
            <label for="location">Kecamatan</label>
            <input type="text" class="form-control" id="location" name="location">
        </div>
        <div class="form-group">
            <label for="sub_district">Kelurahan</label>
            <input type="text" class="form-control" id="sub_district" name="sub_district">
        </div>
        <div class="form-group">
            <label for="setpoint">Link Map</label>
            <input type="text" class="form-control" id="setpoint" name="setpoint">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
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