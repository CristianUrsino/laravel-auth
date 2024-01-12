@extends('layouts/app');
@section('content')
    <h1>index project</h1>
    @foreach ($projects as $project)
        <div>
            <a href="{{route('admin.projects.show',$project->id)}}">{{$project->name}}</a>
        </div>
    @endforeach
@endsection