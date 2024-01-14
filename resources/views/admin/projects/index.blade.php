@extends('layouts/app');
@section('content')
    <h1>index project</h1>
    <div class="mb-3">
        <a href="{{route('admin.projects.create')}}">Aggiungi progetto</a>
    </div>
    @foreach ($projects as $project)
        <div>
            <a href="{{route('admin.projects.show',$project->id)}}">{{$project->name}}</a>
            <a href="{{route('admin.projects.edit', $project->id)}}" class="ms-3">edit</a>
        </div>
    @endforeach
@endsection