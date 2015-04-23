@extends('admin.layout')

@section('title', 'Create.')

@section('content')
@if($errors->has())
   @foreach ($errors->all() as $error)
      <p class="error">{{ $error }}</p>
  @endforeach
@endif

<form method="post" action="{{route('admin.portfolio.store')}}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>

    <label for="title">Title.</label>
    <input id="title" name="title" required>

    <label for="slug">Slug.</label>
    <input id="slug" name="slug" required>

    <label for="projects_select">Projects.</label>
    <select id="projects_select" name="projects_select">
            <option value="default" disabled selected>Select a project.</option>
        @if(count($projects))
            @foreach($projects as $project)
                <option value="{{$project->id}}">{{$project->title}}</option>
            @endforeach
        @else
            <option disabled>Currently, there are no projects.</option>
        @endif
    </select>
    <div id="projects_list"></div>

    <label for="summary">
        Summary.
        <textarea id="summary" name="summary" rows="5" required></textarea>
    </label>

    <input value="Save." type="submit">
</form>
@stop

@section('scripts')
<script src='/assets/js/bower_components/requirejs/require.js' data-main='/assets/js/page/admin/portfolio.js'></script>
@stop