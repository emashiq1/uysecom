@extends('layouts.admin')
@section('content')
	<h2>Add New Product</h2>
	<hr>
	<div class="col-md-12">
		{!! Form::open(Request::old(), ['route'=>'product.store','class'=>'form-group','enctype' => 'multipart/form-data']) !!}
		<div class="col-md-6">
	{!! Form::label('title', '', []) !!}
	{!! Form::text('title', null, ['class'=>'form-control']) !!}
	{!! Form::label('category', '', []) !!}
	{!! Form::select('category', ['select'], '', ['class'=>'form-control']) !!}
	{!! Form::label('description', '', []) !!}
	{!! Form::textarea('description', '', []) !!}
	{!! Form::label('price', 'Price in BDT', []) !!}
	{!! Form::number('price', '', ['class'=>'form-control']) !!}
	{!! Form::label('status', '', []) !!}
	{!! Form::text('status', '', ['class'=>'form-control']) !!}
	<hr>
	</div>
	
	
	<div class="col-md-12" id="photofile">
	<button type="button" class="btn btn-default btn-file" id="addmore" style="float:right">Add New</button>
	<br>
	{!! Form::label('file','Choose File' , []) !!}
   {!! Form::file('image[]', []) !!}

	</div>
	<hr>
	{!! Form::submit("Save", ['class'=>'btn btn-info']) !!}
	
	{!! Form::close() !!}
	</div>

	
@stop
@section('script')
	<script>
	$("#addmore").on("click",function(){
		$("#photofile").append("<label for=\"file\">Choose File</label><input name=\"image[]\" type=\"file\">")});

	</script>
@stop