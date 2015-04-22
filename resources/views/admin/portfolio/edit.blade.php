@extends('admin.layout')

@section('title', 'Edit.')

@section('content')
@if($errors->has())
   @foreach ($errors->all() as $error)
      <p class="error">{{ $error }}</p>
  @endforeach
@endif

<form method="post" action="{{route('admin.portfolio.update', ['id' => $portfolio->id])}}">
    <input type="hidden" name="_method" value="PUT">
    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>

    <label for="title">Title.</label>
    <input id="title" name="title" required value="{{$portfolio->title}}">

    <label for="slug">Slug.</label>
    <input id="slug" name="slug" required value="{{$portfolio->slug}}">

    <label for="projects">Projects.</label>
    <select id="projects" name="projects[]" multiple>
        @if(count($projects))
            @foreach($projects as $project)
                <option value="{{$project->id}}" @if(in_array($project->id, $portfolio->projectList))selected @endif >{{$project->title}}</option>
            @endforeach
        @else
            <option disabled>Currently, there are no projects.</option>
        @endif
    </select>

    <label for="summary">
        Summary.
        <textarea id="summary" name="summary" rows="5" required>{{$portfolio->summary}}</textarea>
    </label>

    <input value="Save." type="submit">
</form>
@stop