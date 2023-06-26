@extends('layouts.main')
@section('content')
    <p>
        Department {{$department->name}} was updated
    </p>

    <p>
        <a href="{{URL::to('department.index')}}"> Return </a> to posts list
    </p>
@endsection
