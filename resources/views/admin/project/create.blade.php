@extends('admin.layout')

@section('title', 'Create.')

@section('content')
@if($errors->has())
   @foreach ($errors->all() as $error)
      <p class="error">{{ $error }}</p>
  @endforeach
@endif

<form method="post" action="{{route('admin.project.store')}}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>

    <label for="title">Title.</label>
    <input id="title" name="title" required>

    <label for="slug">Slug.</label>
    <input id="slug" name="slug" required>

    <label for="subtitle">Subtitle.</label>
    <input id="subtitle" name="subtitle">

    <label for="date">Date.</label>
    <input id="date" name="date">

    <label for="image">Image.
        <textarea id="image" name="image" rows="3" required></textarea>
    </label>

    <label for="summary">Summary.
        <textarea id="summary" name="summary" rows="9" required></textarea>
    </label>

    <label for="body">Body.
        <textarea id="body" name="body" rows="9"></textarea>
    </label>

    <input value="Save." type="submit">
</form>
@stop