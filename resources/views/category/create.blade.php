@extends('layouts.admin')
@section('content')
<div class="col-md-6">	
	<h2>Add New Category</h2>
	{!! Form::model(request()->old(), ['route' => 'categories.store','class'=>'form-group','method'=>'post']) !!}
	<div>
		{!! Form::label('Title', '', []) !!}
	{!! Form::text('title', '', ['class'=>'form-control']) !!}
	@if ($errors->has('title'))
		<span class="alert-warning">{{$errors->first('title')}}</span>
	@endif
	</div>
	<div>
	{!! Form::label('Status', '', []) !!}
	{{Form::select('status',config('myhelpers.status'),null,array('class' => 'form-control')) }}

	
	@if ($errors->has('status'))
		<span class="alert-warning">{{$errors->first('status')}}</span>
	@endif
	</div>
	{!! Form::label('Parent Category', '', []) !!}
	<select name="parent_id" class="form-control">
		<option value="0">Select</option>}
		
		@foreach ($data as $element)
		<option value="{{$element->id}}">{{$element->title}}</option>
		@endforeach
	</select>
	
	<br>
	{!! Form::submit('Save', ['class'=>'btn btn-info']) !!}
	{!! Form::close() !!}
</div>
@stop

