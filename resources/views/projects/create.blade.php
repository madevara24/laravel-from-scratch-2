@extends('layout')

@section('content')
<h1>Create a New Projects</h1>

<form method="POST" action="/projects">
    {{ csrf_field() }}
    <div>
        <input type="text" name="title" placeholder="Project Title">
    </div>
    <div>
        <textarea name="description" placeholder="Project Description"></textarea>
    </div>
    <div>
        <button type="submit">Create Project</button>
    </div>
</form>
@endsection
