@extends('layouts.main')
@section('content')
    <h1>Реєстрація</h1>
    <form action="{{ route('user.logged') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="firstName">Code:</label>
            <input type="text" class="form-control" id="firstName" name="firstName" required>
        </div>
        <div class="form-group">
            <label for="lastName">Name:</label>
            <input type="text" class="form-control" id="lastName" name="lastName" required>
        </div>
        <div class="form-group">
            <label for="email">Position:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Salary:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="form-group">
            <label for="password">Salary:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
        <a href="{{ route('worker.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection

