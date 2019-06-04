@extends('layout')

@section('content')
    <h1>Edit Project</h1>

    <form action="/projects/{{ $project->id }}" method="POST" style="margin-bottom: 1mm">
        @method('PATCH')
        @csrf
        <div class="field">
            <label for="title" class="label">Title</label>
        </div>

        <div class="control">
            <input type="text" class="input" name="title" placeholder="Title" value="{{ $project->title }}">
        </div>

        <div class="field">
            <label for="description" class="label">Description</label>
        </div>

        <div class="control">
            <textarea name="description" class="textarea">{{ $project->description }}</textarea>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Update Project</button>
            </div>
        </div>
    </form>

    <form action="/projects/{{ $project->id }}" method="POST">
        @method('DELETE')
        @csrf

        <div class="field">
            <div class="control">
                <button type="submit" class="button">Delete Project</button>
            </div>
        </div>
    </form>
@endsection
