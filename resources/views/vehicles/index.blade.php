
@extends('layouts.app')

@section('content')
<button class="btn btn-primary" type="button" onclick="window.location='{{ url("home") }}'">Back</button>
<button class="btn btn-primary" type="button" onclick="window.location='{{ url("vehicles/create") }}'">Add Vehicle</button>
<table class="table table-bordered table-striped">
 <tr>
  <th width="10%">Image</th>
  <th width="35%">Class</th>
  <th width="35%">Make</th>
  <th width="35%">Number</th>
  <th width="35%">Description</th>
  <th width="30%">Action</th>
 </tr>
 @foreach($data as $row)
  <tr>
   <td><img src="{{ URL::to('/') }}/images/{{ $row->image }}" class="img-thumbnail" width="75" /></td>
   <td>{{ $row->class }}</td>
   <td>{{ $row->make }}</td>
   <td>{{ $row->number }}</td>
   <td>{{ $row->description }}</td>
   <td>
				
				<form action="{{ route('vehicles.destroy', $row->id) }}" method="post">
					
					<a href="{{ route('vehicles.edit', $row->id) }}" class="btn btn-warning">Edit</a>
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-danger">Delete</button>
				</form>
			</td>
  </tr>
 @endforeach
</table>
{!! $data->links() !!}
@endsection