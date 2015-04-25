@extends('admin.layout')

@section('title', 'Edit.')

@section('content')
@if($errors->has())
   @foreach ($errors->all() as $error)
      <p class="error">{{ $error }}</p>
  @endforeach
@endif

<form method="post" action="{{route('admin.project.update', ['id' => $project->id])}}">
    <input type="hidden" name="_method" value="PUT">
    <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}"/>

    <label for="title">Title.</label>
    <input id="title" name="title" required value="{{$project->title}}">

    <label for="slug">Slug.</label>
    <input id="slug" name="slug" required value="{{$project->slug}}">

    <label for="subtitle">Subtitle.</label>
    <input id="subtitle" name="subtitle" value="{{$project->subtitle}}">

    <label for="date">Date.</label>
    <input id="date" name="date" value="{{$project->date}}">

    <label for="image">Image.
        <input type="file" id="upload"/>
        <textarea id="image" name="image" rows="3" required>{{$project->image}}</textarea>
    </label>

    <label for="summary">Summary.
        <textarea id="summary" name="summary" rows="9" required>{{$project->summary}}</textarea>
    </label>

    <label for="body">Body.
        <input type="file" id="body_upload"/>
        <textarea id="body" name="body" rows="9">{{$project->body}}</textarea>
    </label>

    <input value="Save." type="submit">
</form>
@stop

@section('scripts')
<script src='/assets/js/bower_components/requirejs/require.js' data-main='/assets/js/page/admin/project.js'></script>
@stop