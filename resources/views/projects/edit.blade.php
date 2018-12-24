@extends('layout')

@section('content')
    <h1 class="title">Edit Project</h1>

    <form method="POST" action="/projects/{{$project->id}}">
        {{method_field('PATCH')}}
        {{ csrf_field() }}
        <div class="field">
            <label class="label" for="Title">Title</label>
            <div class="control">
            <input class="input" type="text" placeholder="Title" name="title" value="{{$project->title}}">
            </div>
          </div>

          <div class="field">
                <label class="label" for="Description">Description</label>
                <div class="control">
                  <textarea class="textarea" name="description">{{$project->description}}</textarea>
                </div>
        </div>
        <div class="field">
                <div class="control">
                  <button type="submit" class="button is-link">Update Project</button>
                </div>
              </div>
    </form>
@endsection