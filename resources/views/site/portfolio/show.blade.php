@extends('site.portfolio.layout')

@section('content')
<h1 id="title">{{$portfolio->title}}</h1>

<h1 id="about">About. <span class="accent">Steven Hernandez</span></h1>

<p>
    {!!$portfolio->summary!!}
</p>


<h1 id="portfolio">Portfolio. <span class="accent">Steven Hernandez</span></h1>

@foreach($portfolio->projects as $project)
    <a href="{{route('project.show', ['slug' => $project->slug])}}">{!!$project->image!!}</a>
    <a href="{{route('project.show', ['slug' => $project->slug])}}"><h2>{{$project->title}} <small>{{$project->date}}</small></h2></a>
    <p class="bold">{{$project->subtitle}}</p>

    {!!$project->summary!!}
    @if($project->body)
        <p><a href="{{route('project.show', ['slug' => $project->slug])}}">More about the {{$project->title}}...</a></p>
    @endif
@endforeach
@stop