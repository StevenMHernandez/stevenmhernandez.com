@extends('site.project.layout')

@section('content')
{!!$project->image!!}
<h2>{{$project->title}} <small>{{$project->date}}</small></h2>
<p class="bold">{{$project->subtitle}}</p>
{!!$project->summary!!}
{!!$project->body!!}
@stop