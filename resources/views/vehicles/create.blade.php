@extends('layouts.app')

@section('content')

<style>
    .container {
      max-width: 450px;
    }
    .push-top {
      margin-top: 10px;
    }
</style>
<button class="btn btn-primary" type="button" onclick="window.location='{{ url("vehicles") }}'">Back</button>
<div class="card push-top">
  <div class="card-header">
    Add Vehicle
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
      <form method="post" action="{{ route('vehicles.store') }}">
          <div class="form-group">
              @csrf
              <label for="class">Class</label>
              <input type="text" class="form-control" name="class"/>
          </div>
          <div class="form-group">
              <label for="make">Make</label>
              <input type="text" class="form-control" name="make"/>
          </div>
          <div class="form-group">
              <label for="number">Number</label>
              <input type="text" class="form-control" name="number"/>
          </div>
          <div class="form-group">
              <label for="description">Description</label>
              <input type="text" class="form-control" name="description"/>
          </div>
          <button type="submit" class="btn btn-block btn-danger">Add Vehicle</button>
          
      </form>
  </div>
</div>
@endsection