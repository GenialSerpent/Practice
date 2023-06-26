@extends('layouts.app')

@section('content')
    <h1>Worker Details</h1>
    <table class="table table-bordered">
        <tr>
            <th>Code:</th>
            <td>{{ $worker->code }}</td>
        </tr>
        <tr>
            <th>Name:</th>
            <td>{{ $worker->name }}</td>
        </tr>
        <tr>
            <th>Position:</th>
            <td>{{ $worker->position }}</td>
        </tr>
        <tr>
            <th>Salary:</th>
            <td>{{ $worker->salary }}</td>
        </tr>
        <tr>
            <th>Experience:</th>
            <td>{{ $worker->experience }}</td>
        </tr>
    </table>
    <a href="{{ route('worker.index') }}" class="btn btn-secondary">Back</a>
@endsection
