@extends('layouts.kalogakbisa')
@section('content')
<div class="container">
    <h1>Edit Job Location</h1>
    <form method="POST" action="{{ route('jobLocations.update', $jobLocation) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="location">Location</label>
            <input type="text" class="form-control" id="location" name="location" value="{{ $jobLocation->location }}">
        </div>
        <div class="form-group">
            <label for="sub_district">Sub District</label>
            <input type="text" class="form-control" id="sub_district" name="sub_district" value="{{ $jobLocation->sub_district }}">
        </div>
        <div class="form-group">
            <label for="setpoint">Setpoint</label>
            <input type="text" class="form-control" id="setpoint" name="setpoint" value="{{ $jobLocation->setpoint }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection