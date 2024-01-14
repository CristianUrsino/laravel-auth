@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>HOME</h1>
        <div><a href="{{route('admin.projects.index')}}">projects</a></div>
        <div><a href="{{route('admin.dashboard')}}">dashboard</a></div>
    </section>
@endsection
