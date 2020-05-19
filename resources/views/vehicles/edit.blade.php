@extends('layouts.app')

@section('content')

<style>
    .container {
      max-width: 450px;
    }
    .push-top {
      margin-top: 50px;
    }
</style>

<div class="card push-top">
  <div class="card-header">
    Edit & Update
  </div>

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('vehicles.update', $vehicle->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="class">Class</label>
              <input type="text" class="form-control" name="class" value="{{ $vehicle->class }}"/>
          </div>
          <div class="form-group">
              <label for="make">Make</label>
              <input type="text" class="form-control" name="make" value="{{ $vehicle->make }}"/>
          </div>
          <div class="form-group">
              <label for="number">Number</label>
              <input type="text" class="form-control" name="number" value="{{ $vehicle->number }}"/>
          </div>
          <div class="form-group">
              <label for="description">Description</label>
              <input type="text" class="form-control" name="description" value="{{ $vehicle->description }}"/>
          </div>
          <button type="submit" class="btn btn-block btn-danger">Update User</button>
      </form>
  </div>
</div>
@endsection