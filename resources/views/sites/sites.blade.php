
@extends('main')

@section('content')
	<h1>i am sites page</h1>

	@if(1!=true)
		我是对的
	@else
		我是错的
	@endif

	@if(count($persons)>0)
		<ul>
		@foreach($persons as $person)
			<li>{{$person}}</li>
		@endforeach
		</ul>
	@endif
@stop

@section('footer')
	<script type="text/javascript">
		console.log('contact page')
	</script>
@stop