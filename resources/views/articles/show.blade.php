 
@extends('main')

@section('content')

		<h2>{{$article->title}}</h2>
			<article class="body">
				{{$article->content}}
			</article>
@stop