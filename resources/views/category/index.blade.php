@extends('layouts.admin')
@section('content')
<div>
	
	<table class="table">
	<caption>Categories List</caption>
	<thead>
		<tr>
			<th>Serial No</th>
			<th>Title</th>
			<th>Status</th>
			<th>Parent Category Name</th>
			
		</tr>
	</thead>
	<tbody>
	@php
		$i=1;
	@endphp
	@foreach ($data as $element)
		<tr>
			<td>{{$i}}</td>
			<td>{{$element->title}}</td>
			<td>{{$element->status}}</td>
			
			<td>{{$element->Categories['title']}}
				@if ($element->Categories['id']==0)
				{{'Root Category'}}
			@endif
			</td>
			<td><a href="{{ route('category.edit',$element->id) }}" class="glyphicon glyphicon-edit"></a>
			{!! Form::delete(route('category.destroy',$element->id)) !!}
			</td>
			
			
		</tr>
		@php
			$i++;
		@endphp
		@endforeach
	</tbody>
</table>	
	</div>	

@stop
