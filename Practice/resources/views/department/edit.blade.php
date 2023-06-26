@extends('layouts.main')
@section('content')
    <h1>Edit workshop</h1>
    <form action="{{ route('departments.update', $workshop->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="code">Code:</label>
            <input type="text" class="form-control" id="code" name="code" required value="{{ $workshop->code }}">
        </div>
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required value="{{ $workshop->name }}">
        </div>
        <div class="form-group">
            <label for="worker_ids">Workers:</label>
            <select multiple class="form-control" id="worker_ids" name="worker_ids[]">
                @foreach ($workers as $worker)
                    <option value="{{ $worker->id }}" {{ $workshop->workers->contains($worker->id) ? 'selected' : '' }}>{{ $worker->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
        <a href="{{ route('departments.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection

