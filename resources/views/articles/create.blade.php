 
@extends('main')

@section('content')

	<h1>撰写新文章</h1>
	{!! Form::open(['url'=>'articles']) !!}
	@include('articles.form')
		
	{!! Form::close()!!}


@stop