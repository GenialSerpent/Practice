@extends('layouts.main')
@section('content')
    <p>
        worker {{$worker->name}} was updated
    </p>

    <p>
        <a href="{{URL::to('worker.index')}}"> Return </a> to posts list
    </p>
@endsection
