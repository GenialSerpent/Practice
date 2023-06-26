@extends('layouts.main')
@section('content')
    <h1>Edit worker</h1>
    <form action="{{ route('worker.update', $worker->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="code">Code:</label>
            <input type="text" class="form-control" id="code" name="code" required value="{{ $worker->code }}">
        </div>
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required value="{{ $worker->name }}">
        </div>
        <div class="form-group">
            <label for="position">Position:</label>
            <input type="text" class="form-control" id="position" name="position" required value="{{ $worker->position }}">
        </div>
        <div class="form-group">
            <label for="salary">Salary:</label>
            <input type="number" class="form-control" id="salary" name="salary" required value="{{ $worker->salary }}">
        </div>
        <div class="form-group">
            <label for="experience">Experience:</label>
            <input type="number" class="form-control" id="experience" name="experience" required value="{{ $worker->experience }}">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
        <a href="{{ route('worker.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection

