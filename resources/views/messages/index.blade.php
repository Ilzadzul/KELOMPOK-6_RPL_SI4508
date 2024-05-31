@extends('layouts.kalogakbisa')
@section('content')
<div class="container">
    <h1>Messages</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('messages.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="message">Message:</label>
            <input type="text" class="form-control" id="message" name="message" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Message</button>
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
