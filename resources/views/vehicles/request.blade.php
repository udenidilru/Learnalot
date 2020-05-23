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


  <table class="table">
    <thead>
        <tr class="table-warning">
          <td>ID</td>
          <td>UserName</td>
          <td>Email</td>
          <td>PNo.</td>
          <td>Class</td>
          <td>Make</td>
          <td>Number</td>
          <td>UsedYears</td>
          <td>Description</td>
          <td>Price</td>
          <td>Image</td>
          <td class="text-center">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($vehicle as $vehicles)
        <tr>
            <td>{{$vehicles->id}}</td>
            <td>{{$vehicles->uname}}</td>
            <td>{{$vehicles->email}}</td>
            <td>{{$vehicles->pno}}</td>
            <td>{{$vehicles->class}}</td>
            <td>{{$vehicles->make}}</td>
            <td>{{$vehicles->number}}</td>
            <td>{{$vehicles->usedyears}}</td>
            <td>{{$vehicles->description}}</td>
            <td>{{$vehicles->price}}</td>
            <td><img src="{{ asset("images/$vehicles->image") }}" alt="" style = "width:100px; height:100px"></td>
            <td class="text-center">
            <button class="btn btn-primary" type="button" onclick="window.location='{{ url("accept") }}'">Accept</button>
                <form action="{{ route('vehicles.destroy', $vehicles->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm"" type="submit">Reject</button>
                  </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection