@extends('layouts/app');
@section('content')
    <h1>{{$project->name}}</h1>
    <div>
        {{$project->description}}
    </div>
@endsection