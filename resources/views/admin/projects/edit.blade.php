@extends('layouts.app')
@section('content')
    <section class="container">
       <h1>edit {{$project->title}}</h1>

       <form action="{{route('admin.projects.update', $project->id)}}" method="POST">
            @method('PUT')
            @csrf

            <div class="mb-3">
                <label for="name">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name') . $project->name }}">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            

            <div class="mb-3">
                <label for="description">description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" cols="30" rows="10" >{{ old('description') . $project->description }}</textarea>
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="repository_link">Repository link</label>
                <input type="url" class="form-control @error('repository_link') is-invalid @enderror" name="repository_link" id="repository_link" value="{{ old('repository_link') . $project->repository_link }}">
                @error('repository_link')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="completion_date">completion_date</label>
                <input type="date" class="form-control @error('completion_date') is-invalid @enderror" name="completion_date" id="completion_date" value="{{ old('completion_date') . $project->completion_date }}">
                @error('completion_date')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="project_status">project_status</label>
                <select name="project_status" id="project_status">
                    <option value="active">active</option>
                    <option value="completed">completed</option>
                    <option value="paused">paused</option>
                </select>
                @error('project_status')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <button type="submit" class="btn">Invia</button>
                <button type="reset" class="btn">Reset</button>
            </div>

        </form>  

    </section>
@endsection