@extends('site.portfolio.layout')

@section('content')
    @if($portfolio->id != env('DEFAULT_PORTFOLIO_ID'))
        <h1 id="title"><span class="accent">Portfolio for:</span> {{$portfolio->title}}</h1>
    @endif

    <h1 id="about">About. <span class="accent">Steven Hernandez</span></h1>

    <p>
        {!!$portfolio->summary!!}
    </p>


    <h1 id="portfolio">Portfolio. <span class="accent">Steven Hernandez</span></h1>

    @foreach($portfolio->projects as $project)
        <div class="mainImage">
            <a href="{{route('project.show', ['slug' => $project->slug])}}">{!!$project->image!!}</a>
        </div>
        <a href="{{route('project.show', ['slug' => $project->slug])}}"><h2>{{$project->title}} <small class="accent">{{$project->date}}</small></h2></a>
        <p class="bold">{{$project->subtitle}}</p>

        {!!$project->summary!!}
        @if($project->body)
            <p class="readMore"><a href="{{route('project.show', ['slug' => $project->slug])}}">More about the {{$project->title}}.</a></p>
        @endif
    @endforeach
@stop

