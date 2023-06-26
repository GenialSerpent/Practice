@extends('layouts.main')
@section('content')
    <h1>Workers List</h1>
    <a href="{{ route('worker.create') }}" class="btn btn-primary mb-3">New worker</a>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Code</th>
            <th>Name</th>
            <th>Position</th>
            <th>Salary</th>
            <th>Experience</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($workers as $worker)
            <tr>
                <td>{{ $worker->code }}</td>
                <td>{{ $worker->name }}</td>
                <td>{{ $worker->position }}</td>
                <td>{{ $worker->salary }}</td>
                <td>{{ $worker->experience }}</td>
                <td>
                    <a href="{{ route('worker.show', $worker->id) }}" class="btn btn-info">Show</a>
                    <a href="{{ route('worker.edit', $worker->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('worker.delete', $worker->id) }}" method="POST" style="display:inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
