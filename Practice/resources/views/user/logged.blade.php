@extends('layouts.main')
@section('content')
    <h1>New worker</h1>
    <form action="{{ route('worker.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="code">Code:</label>
            <input type="text" class="form-control" id="code" name="code" required>
        </div>
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="position">Position:</label>
            <input type="text" class="form-control" id="position" name="position" required>
        </div>
        <div class="form-group">
            <label for="salary">Salary:</label>
            <input type="number" class="form-control" id="salary" name="salary" required>
        </div>
        <div class="form-group">
            <label for="experience">Experience:</label>
            <input type="number" class="form-control" id="experience" name="experience" required>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
        <a href="{{ route('worker.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection


