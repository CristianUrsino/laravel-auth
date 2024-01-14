@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>HOME</h1>
        <div><a href="{{route('admin.projects.index')}}">projects</a></div>
    </section>
@endsection
