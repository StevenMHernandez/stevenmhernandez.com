@extends('admin.layout')

@section('title', 'Portfolios.')

@section('content')
<p><strong class="accent"><a href="{{route('admin.portfolio.create')}}">New.</a></strong></p>

@if(count($portfolios))
    @foreach($portfolios as $portfolio)
        <h2><a href="{{route('admin.portfolio.edit', ['id' => $portfolio->id])}}">{{$portfolio->title}}</a></h2>
    @endforeach
@else
    <p>Currently, there are no portfolios.</p>
@endif
@stop