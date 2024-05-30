@extends('layouts.kalogakbisa')

@section('content')
<div class="container">
    <h1>Job Locations</h1>
    <form method="GET" action="{{ route('jobLocations.index') }}">
        <div class="form-group">
            <input type="text" class="form-control" id="sub_district" name="sub_district" placeholder="Search by Sub District">
        </div>
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
    <a href="{{ route('jobLocations.create') }}" class="btn btn-primary">Add New Job Location</a>
    <table class="table">
        <thead>
            <tr>
                <th>Location</th>
                <th>Sub District</th>
                <th>Setpoint</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jobLocations as $jobLocation)
            <tr>
                <td>{{ $jobLocation->location }}</td>
                <td>{{ $jobLocation->sub_district }}</td>
                <td>{{ $jobLocation->setpoint }}</td>
                <td>
                    <a href="{{ route('jobLocations.edit', $jobLocation) }}" class="btn btn-primary">Edit</a>
                    <form method="POST" action="{{ route('jobLocations.destroy', $jobLocation) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Menampilkan hasil pencarian dari tabel contacts -->
    @if(isset($contacts))
    <h2>Contacts</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Region</th>
                <th>Position</th>
                <th>Nomor Telepon</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contacts as $contact)
            <tr>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->region }}</td>
                <td>{{ $contact->position }}</td>
                <td>{{ $contact->phone_number }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>
@endsection