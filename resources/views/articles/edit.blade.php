 
@extends('main')

@section('content')
	<h1>修改文章</h1>
	{!! Form::model($article,['method'=>'PATCH','url'=>'articles/'.$article->id]) !!}
	@include('articles.form')
	{!! Form::close()!!}


@stop