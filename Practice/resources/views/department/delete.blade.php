@extends('layouts.main')
@section('content')
    <p>
        Department {{$department->name}} was deleted
    </p>

    <p>
        <a href="{{URL::to('departments')}}"> Return </a> to posts list
    </p>
@endsection
