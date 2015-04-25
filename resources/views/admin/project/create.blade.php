@extends('admin.layout')

@section('title', 'Create.')

@section('content')
@if($errors->has())
   @foreach ($errors->all() as $error)
      <p class="error">{{ $error }}</p>
  @endforeach
@endif

<form method="post" action="{{route('admin.project.store')}}">
    <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}"/>

    <label for="title">Title.</label>
    <input id="title" name="title" required value="{{old('title')}}">

    <label for="slug">Slug.</label>
    <input id="slug" name="slug" required value="{{old('slug')}}">

    <label for="subtitle">Subtitle.</label>
    <input id="subtitle" name="subtitle" value="{{old('subtitle')}}">

    <label for="date">Date.</label>
    <input id="date" name="date" value="{{old('date')}}">

    <label for="image">Image.
        <input type="file" id="upload"/>
        <textarea id="image" name="image" rows="3" required>{{old('image')}}</textarea>
    </label>

    <label for="summary">Summary.
        <textarea id="summary" name="summary" rows="9" required>{{old('summary')}}</textarea>
    </label>

    <label for="body">Body.
        <input type="file" id="body_upload"/>
        <textarea id="body" name="body" rows="9">{{old('body')}}</textarea>
    </label>

    <input value="Save." type="submit">
</form>
@stop

@section('scripts')
<script src='/assets/js/bower_components/requirejs/require.js' data-main='/assets/js/page/admin/project.js'></script>
@stop