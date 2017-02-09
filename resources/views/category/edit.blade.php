@extends('layouts.admin')
@section('content')
<div class="col-md-6">	
	<h2>Update Category</h2>
	{!! Form::model($data, ['route' => ['category.update',$data->id],
	'class'=>'form-group']) !!}
	{{ method_field('PUT') }}
	<div>
		{!! Form::label('Title', '', []) !!}
	{!! Form::text('title', $data->title, ['class'=>'form-control']) !!}
	@if ($errors->has('title'))
		<span class="alert-warning">{{$errors->first('title')}}</span>
	@endif
	</div>
	<div>
	{!! Form::label('Status', '', []) !!}
	{!! Form::text('Status', $data->status, ['class'=>'form-control']) !!}
	
	@if ($errors->has('status'))
		<span class="alert-warning">{{$errors->first('status')}}</span>
	@endif
	</div>
	{!! Form::label('Parent Category', '', []) !!}
	<select name="parent_id" class="form-control">
		<option value="0">Select</option>}
		
		@foreach ($list as $element)
		@if ($element->id !=$data->id)
			<option value="{{$element->id}}"
		@if ($element->id == $data->parent_id)
			{{'Selected'}}
		@endif
		>{{$element->title}}</option>
		@endif
		
		@endforeach
	</select>
	
	<br>
	{!! Form::submit('Save', ['class'=>'btn btn-info']) !!}
	{!! Form::close() !!}
</div>
@stop

