@extends('layouts.app')

@section('content')
<style>
  .push-top {
    margin-top: 50px;
  }
</style>
 
<div class="push-top">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif

<button class="btn btn-primary" type="button" onclick="window.location='{{ url("vehicles/create") }}'">Add New</button>


  <table class="table">
    <thead>
        <tr class="table-warning">
          <td>ID</td>
          <td>Class</td>
          <td>Make</td>
          <td>Number</td>
          <td>Description</td>
          <td class="text-center">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($vehicle as $vehicles)
        <tr>
            <td>{{$vehicles->id}}</td>
            <td>{{$vehicles->class}}</td>
            <td>{{$vehicles->make}}</td>
            <td>{{$vehicles->number}}</td>
            <td>{{$vehicles->description}}</td>
            <td class="text-center">
                <a href="{{ route('vehicles.edit', $vehicles->id)}}" class="btn btn-primary btn-sm"">Edit</a>
                <form action="{{ route('vehicles.destroy', $vehicles->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm"" type="submit">Delete</button>
                  </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection