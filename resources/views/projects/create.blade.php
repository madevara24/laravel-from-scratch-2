@extends('layout')
@section('content')
<h1 class="title">Create a New Projects</h1>

<form method="POST" action="/projects">
    {{ csrf_field() }}
    <div class="field">
        <label class="label" for="title">Project Title</label>
        <input class="input {{ $errors->has('title') ? 'is-danger' : '' }}" type="text" name="title" placeholder="Project Title"  value="{{ old('title') }}">
    </div>
    <div class="field">
        <label class="label" for="description">Project Description</label>
        <textarea class="textarea {{ $errors->has('description') ? 'is-danger' : '' }}" name="description" placeholder="Project Description">{{ old('description') }}</textarea>
    </div>
    <div class="field">
        <button class="button is-link" type="submit">Create Project</button>
    </div>

    @include('errors')
</form>
@endsection
