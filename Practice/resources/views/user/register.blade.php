@extends('layouts.main')
@section('content')
    <h1>Реєстрація</h1>
    <form action="{{ URL::to('user/logged') .'/' . $user->id }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="firstName">Ім'я:</label>
            <input type="text" class="form-control" @error('firstName') id="firstName" name="firstName" value="{{ old('firstName') }}" required>
            @error('firstName')
                <span role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="lastName">Прізвище:</label>
            <input type="text" class="form-control" @error('lastName') id="lastName" name="lastName" value="{{ old('lastName') }}" required>
            @error('lastName')
                <span role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="email">Електронна пошта:</label>
            <input type="email" class="form-control" @error('email') id="email" name="email" value="{{ old('email') }}" required>
            @error('email')
                <span role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="password">Пароль:</label>
            <input type="password" class="form-control" @error('password') id="password" name="password" value="{{ old('password') }}" required>
        </div>
        <div class="form-group">
            <label for="password-confirm">Підтвердження пароля:</label>
            <input type="password" class="form-control" id="password-confirm" name="password_confirmation" value="{{ old('password_confirmation') }}" required>
            @error('password')
                <span role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Зареєструватись</button>
        <a href="{{ route('user.index') }}" class="btn btn-secondary">Назад</a>
    </form>
@endsection


