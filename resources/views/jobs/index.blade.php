@extends('layouts.kalogakbisa')

@section('content')
<div class="container" style="border: 2px solid #f2f2f2; padding: 20px; margin-left: 55px; border-radius: 10px; background-color: #f2f2f2; box-shadow: 5px 5px 15px rgba(0,0,0,0.3);">
    <h2 style="text-align: center;">Job Listings</h2>
    <a href="{{ route('jobs.create') }}" class="btn btn-primary mb-3">Add New Job</a>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    <style>
        .container {
            margin-top: 50px;
        }

        .custom-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .custom-table th, .custom-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        .custom-table th {
            background-color: #f2f2f2;
        }

        .custom-table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .custom-table tr:hover {
            background-color: #f1f1f1;
        }

        .btn-edit, .btn-delete {
            background-color: #4CAF50;
            color: white;
            padding: 5px 10px;
            text-decoration: none;
            margin: 2px;
            display: inline-block;
            border: none;
            cursor: pointer;
            border-radius: 3px;
        }

        .btn-edit {
            background-color: #ff9800; /* Orange */
        }

        .btn-delete {
            background-color: #f44336; /* Red */
        }

        .btn-edit:hover, .btn-delete:hover {
            opacity: 0.8;
        }
    </style>

    <table class="custom-table">
        <thead>
            <tr>
                <th>Job Title</th>
                <th>Monthly Salary</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Location</th>
                <th>Contact</th>
                <th>Category</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jobs as $job)
            <tr>
                <td>{{ $job->job_title }}</td>
                <td>{{ $job->monthly_salary }}</td>
                <td>{{ $job->start_date }}</td>
                <td>{{ $job->end_date }}</td>
                <td>{{ $job->location }}</td>
                <td>{{ $job->contact }}</td>
                <td>{{ $job->category }}</td>
                <td>
                    <a href="{{ route('jobs.edit', $job->id) }}" class="btn-edit">Edit</a>
                    @if(Auth::user()->user_type !== 'Admin') 
                    <form action="{{ route('jobs.destroy', $job->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-delete">Delete</button>
                    </form>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="container mt-4">
    <div class="row">
        <div class="col text-center">
            <a href="{{ url('/dashboard') }}" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>

@endsection