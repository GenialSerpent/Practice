@extends('layouts.main')
@section('content')
    <h1>Реєстрація</h1><br>
    <a href="{{ route('user.register') }}" class="btn btn-primary mb-3">Реєстрація</a><br>
    <a href="{{ route('user.login') }}" class="btn btn-primary mb-3">Вхід</a>
@endsection


