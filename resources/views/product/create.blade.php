@extends('layouts.admin')
@section('content')
	<h2>Add New Product</h2>
	<hr>
	<div class="col-md-6">
		{!! Form::model(Request::old(), ['route'=>'products.store','class'=>'form-group','files'=>true,'method'=>'post']) !!}

		<div class="">
	{!! Form::label('title', '', []) !!}
	{!! Form::text('title', null, ['class'=>'form-control']) !!}
	{!! Form::label('category', '', []) !!}
	<select name="category_id" class="form-control">
	@foreach ($data as $element)
		<option value="{{$element->id}}">{{$element->title}}</option>
	@endforeach
	</select>
	{!! Form::label('description', '', []) !!}
	{!! Form::textarea('description', '', []) !!}
	{!! Form::label('price', 'Price in BDT', []) !!}
	{!! Form::number('price', '', ['class'=>'form-control']) !!}
	{!! Form::label('status', '', []) !!}
	{{Form::select('status',config('myhelpers.status'),null,array('class' => 'form-control')) }}

	<hr>
	</div>
	
	
	<div class="col-md-12" id="photofile">
	<button type="button" class="btn btn-default btn-file" id="addmore" style="float:right">Add New</button>
	<br>
	{!! Form::label('file','Choose File' , []) !!}
   {!! Form::file('image[]', []) !!}

	</div>
	
	{!! Form::submit("Save", ['class'=>'btn btn-info','style'=>'margin-top:20px;margin-left:17px;width:100px;']) !!}
	
	{!! Form::close() !!}
	</div>

	
@stop
@section('script')
	<script>
	$("#addmore").on("click",function(){
		$("#photofile").append("<label for=\"file\">Choose File</label><input name=\"image[]\" type=\"file\">")});

	</script>
@stop