@extends('layouts.main')
@section('content')
    <h1>Workshop Details</h1>
    <table class="table table-bordered">
        <tr>
            <th>Code:</th>
            <td>{{ $workshop->code }}</td>
        </tr>
        <tr>
            <th>Name:</th>
            <td>{{ $workshop->name }}</td>
        </tr>
        <tr>
            <th>Workers:</th>
            <td>
                <ul>
                    @foreach ($workshop->workers as $worker)
                        <li>{{ $worker->name }}</li>
                    @endforeach
                </ul>
            </td>
        </tr>
    </table>
    <a href="{{ route('department.index') }}" class="btn btn-secondary">Back</a>
@endsection
