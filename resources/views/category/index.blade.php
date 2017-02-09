@extends('layouts.admin')
@section('content')
<div>
	
	<table class="table">
	<caption>Categories List</caption>
	<thead>
		<tr>
			<th>Title</th>
			<th>Status</th>
			<th>Parent Id</th>
			
		</tr>
	</thead>
	<tbody>
	@foreach ($data as $element)
		<tr>

			<td>{{$element->title}}</td>
			<td>{{$element->status}}</td>
			<td>{{$element->parent_id}}</td>
			<td><a href="{{ route('category.edit',$element->id) }}">Update</a></td>
			
			
		</tr>
		@endforeach
	</tbody>
</table>	
	</div>	

@stop
