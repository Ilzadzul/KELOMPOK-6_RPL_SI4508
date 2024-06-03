@extends('layouts.kalogakbisa')

@section('content')
<div class="container" style="border: 2px solid #f2f2f2; padding: 20px; margin-left: 55px; border-radius: 10px; background-color: #f2f2f2; box-shadow: 5px 5px 15px rgba(0,0,0,0.3);">
    <h2 style="text-align: center;">Add New Job</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('jobs.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="job_title">Job Title:</label>
            <input type="text" class="form-control" id="job_title" name="job_title" required>
        </div>
        <div class="form-group">
            <label for="monthly_salary">Monthly Salary:</label>
            <input type="text" class="form-control" id="monthly_salary" name="monthly_salary" required>
        </div>
        <div class="form-group">
            <label for="start_date">Start Date:</label>
            <input type="date" class="form-control" id="start_date" name="start_date" required>
        </div>
        <div class="form-group">
            <label for="end_date">End Date:</label>
            <input type="date" class="form-control" id="end_date" name="end_date" required>
        </div>
        <div class="form-group">
            <label for="location">Location:</label>
            <input type="text" class="form-control" id="location" name="location" required>
        </div>
        <div class="form-group">
            <label for="contact">Contact:</label>
            <input type="text" class="form-control" id="contact" name="contact" required>
        </div>
        <div class="form-group">
        <label for="category">Category:</label>
        <select class="form-control" id="category" name="category" required>
            <option value="Teknologi">Teknologi</option>
            <option value="Keuangan">Keuangan</option>
            <option value="Pendidikan">Pendidikan</option>
            <option value="Kesehatan">Kesehatan</option>
        </select>
    </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<div class="container mt-4">
    <div class="row">
        <div class="col text-center">
            <a href="{{ url('/jobs') }}" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>

@endsection