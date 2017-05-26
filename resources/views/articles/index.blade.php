 
@extends('main')

@section('content')
	<h1>Articles :{{Auth::user()->name}}</h1>
	<hr>
	@foreach($articles as $article)
		<h2><a href="{{url('articles',$article->id)}}">{{$article->title}}</a></h2>
			<article class="body">
				{{$article->content}}
			</article>

	@endforeach
@stop