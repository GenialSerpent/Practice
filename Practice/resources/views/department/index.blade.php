@extends('layouts.main')
@section('content')
    <h1>departments List</h1>
    <a href="{{ route('department.create') }}" class="btn btn-primary mb-3">New departments</a>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Code</th>
            <th>Name</th>
            <th>Workers</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($departments as $department)
            <tr>
                <td>{{ $department->code }}</td>
                <td>{{ $department->name }}</td>
                <td>
                    <ul>
                        @foreach ($department->workers as $worker)
                            <li>{{ $worker->name }}</li>
                        @endforeach
                    </ul>
                </td>
                <td>
                    <a href="{{ route('department.show', $department->id) }}" class="btn btn-info">Show</a>
                    <a href="{{ route('department.edit', $department->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('department.delete', $department->id) }}" method="POST" style="display:inline-block">
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

