@extends('site.project.layout')

@section('content')
    <div class="mainImage">
        {!!$project->image!!}
    </div>
    <h2>{{$project->title}}
        <small class="accent">{{$project->date}}</small>
    </h2>
    <p class="bold">{{$project->subtitle}}</p>
    {!!$project->summary!!}
    {!!$project->body!!}
@stop
