@extends('admin.layout')

@section('title', 'Projects.')

@section('content')
<p><strong class="accent"><a href="{{route('admin.project.create')}}">New.</a></strong></p>

@if(count($projects))
    @foreach($projects as $project)
        <h2><a href="{{route('admin.project.edit', ['id' => $project->id])}}">{{$project->title}}</a></h2>
    @endforeach
@else
    <p>Currently, there are no projects.</p>
@endif
@stop