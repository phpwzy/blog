	<div class="form-group">
		{!! Form::label('title') !!} 
		{!! Form::text('title',null,['class'=>'form-control','jelly'=>'bool']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('content') !!} 
		{!! Form::textarea('content',null,['class'=>'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('publish_at') !!} 
		{!! Form::input('date','publish_at',date('Y-m-d'),['class'=>'form-control']) !!}
	</div>
	{!!Form::submit('发表文章',['class'=>'btn btn-primary form-control']) !!}
	@include('errors.list')
	