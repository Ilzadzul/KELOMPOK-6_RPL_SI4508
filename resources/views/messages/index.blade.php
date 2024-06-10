@extends('layouts.kalogakbisa')

@section('content')
<div class="container">
    <h1>Messages</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('messages.store') }}" method="POST" class="form-message">
        @csrf
        <div class="form-group">
            <label for="user">User:</label>
            <input type="text" class="form-control" id="user" name="user" required>
        </div>
        <div class="form-group">
            <label for="message">Message:</label>
            <input type="text" class="form-control" id="message" name="message" required>
        </div>
        <button type="submit" class="btn btn-primary btn-submit">Add Message</button>
    </form>

    <h2 class="mt-4">Daftar Pesan</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Message</th>
                <th>User</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($adminMessages as $message)
                <tr>
                    <td>{{ $message->message }}</td>
                    <td>{{ $message->user }}</td>
                    <td>
                        <form action="{{ route('messages.destroy', $message->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@section('styles')
<style>
    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
    }

    h1, h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    .form-message {
        margin-bottom: 30px;
        background-color: #f8f9fa;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .form-group label {
        font-weight: bold;
    }

    .form-control {
        border-radius: 4px;
        border: 1px solid #007bff;
        margin-bottom: 10px;
        padding: 10px;
        box-shadow: none;
    }

    .btn-submit {
        background-color: #007bff;
        border: none;
    }

    .btn {
        padding: 10px 20px;
        border-radius: 4px;
    }

    .btn-primary {
        background-color: #007bff;
        border: none;
    }

    .btn-danger {
        background-color: #dc3545;
        border: none;
    }

    .table {
        width: 100%;
        margin-top: 20px;
        border-collapse: collapse;
    }

    .table th, .table td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
    }

    .table th {
        background-color: #f2f2f2;
    }

    .alert {
        padding: 10px;
        margin-bottom: 20px;
        border-radius: 4px;
    }

    .alert-success {
        background-color: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
    }
</style>
@endsection
