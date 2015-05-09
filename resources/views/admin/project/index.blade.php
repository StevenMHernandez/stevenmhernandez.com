@extends('admin.layout')

@section('title', 'Projects.')

@section('content')
<p><strong class="accent"><a href="{{route('admin.project.create')}}">New.</a></strong></p>

@if(count($projects))
<ul>
    @foreach($projects as $project)
        <li><a href="{{route('admin.project.edit', ['id' => $project->id])}}">{{$project->title}}</a></li>
    @endforeach
</ul>
@else
    <p>Currently, there are no projects.</p>
@endif
@stop