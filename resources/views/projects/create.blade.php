@extends('layout')

@section('content')
    <form action="/projects" method="post">
        {{ csrf_field() }}

        <div class="field">
            <label for="title" class="label">Project Title</label>

            <div class="control">
                <input type="text" name="title" class="input {{ $errors->has('title') ? 'is-danger' : '' }}" value="{{ old('title') }}">
            </div>
        </div>

        <div class="field">
            <label for="description" class="label ">Project Description</label>

            <div class="control">
                <textarea name="description" class="textarea {{ $errors->has('description') ? 'is-danger' : '' }}">{{ old('description') }}</textarea>
            </div>
        </div>

        <div class="field">
            <button type="submit">Create Project</button>
        </div>

        @if($errors->any())
            <div class="notification is-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>
@endsection
