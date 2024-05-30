@extends('layouts.kalogakbisa')
@section('content')
<div class="container">
    <h1>Add New Job Location</h1>
    <form method="POST" action="{{ route('jobLocations.store') }}">
        @csrf
        <div class="form-group">
            <label for="location">Location</label>
            <input type="text" class="form-control" id="location" name="location">
        </div>
        <div class="form-group">
            <label for="sub_district">Sub District</label>
            <input type="text" class="form-control" id="sub_district" name="sub_district">
        </div>
        <div class="form-group">
            <label for="setpoint">Setpoint</label>
            <input type="text" class="form-control" id="setpoint" name="setpoint">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection