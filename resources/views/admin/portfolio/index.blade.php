@extends('admin.layout')

@section('title', 'Portfolios.')

@section('content')
<p><strong class="accent"><a href="{{route('admin.portfolio.create')}}">New.</a></strong></p>

@if(count($portfolios))
<ul>
    @foreach($portfolios as $portfolio)
        <li><a href="{{route('admin.portfolio.edit', ['id' => $portfolio->id])}}">{{$portfolio->title}}</a></li>
    @endforeach
</ul>
@else
    <p>Currently, there are no portfolios.</p>
@endif
@stop