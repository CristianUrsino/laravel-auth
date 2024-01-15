@extends('layouts/app');
@section('content')
    <h1>{{$project->name}}</h1>
    <div>
        {{$project->description}}
    </div>
    <div><img src="{{asset('storage/'.$project->image)}}" alt="image of {{$project->title}}"></div>
@endsection