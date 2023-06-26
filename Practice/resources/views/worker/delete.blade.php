@extends('layouts.main')
@section('content')
    <p>
        Worker {{$worker->name}} was deleted
    </p>

    <p>
        <a href="{{URL::to('worker.index')}}"> Return </a> to posts list
    </p>
@endsection
