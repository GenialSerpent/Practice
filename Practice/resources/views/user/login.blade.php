@extends('layouts.main')
@section('content')
    <h1>Логін</h1>
    <form action="{{ URL::to('user/logged') .'/' . $user->id }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="email">Електронна пошта:</label>
            <input type="email" class="form-control" @error('email') id="email" name="email" required>
            @error('email')
            <span role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="password">Пароль:</label>
            <input type="password" class="form-control" @error('password') id="password" name="password" required>
            @error('password')
            <span role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Увійти</button>
        <a href="{{ route('user.index') }}" class="btn btn-secondary">Назад</a>
    </form>
@endsection


