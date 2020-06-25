<!-- @extends('layouts.app')

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
          <div class="form-group">
       <label class="col-md-4 text-right">Select Profile Image</label>
       <div class="col-md-8">
        <input type="file" name="image" />
              <img src="{{ URL::to('/') }}/images/{{ $vehicle->image }}" class="img-thumbnail" width="100" />
                        <input type="hidden" name="image" value="{{ $vehicle->image }}" />
       </div>
      </div>
          <button type="submit" class="btn btn-block btn-danger">Update User</button>
      </form>
  </div>
</div>
@endsection -->
@extends('layouts.app')

@section('content')

            
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div align="right">
            </div>
            <br />
     <form method="post" action="{{ route('vehicles.update', $vehicle->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
      <div class="form-group">
       <label class="col-md-4 text-right">Class</label>
       <div class="col-md-8">
        <input type="text" name="class" value="{{ $vehicle->class }}" class="form-control input-lg" />
       </div>
      </div>
      <br />
      <br />
      <br />
      <div class="form-group">
       <label class="col-md-4 text-right">Make</label>
       <div class="col-md-8">
        <input type="text" name="make" value="{{ $vehicle->make }}" class="form-control input-lg" />
       </div>
      </div>
      <br />
      <br />
      <br />
      <div class="form-group">
       <label class="col-md-4 text-right">number</label>
       <div class="col-md-8">
        <input type="text" name="number" value="{{ $vehicle->number }}" class="form-control input-lg" />
       </div>
      </div>
      <br />
      <br />
      <br />
      <div class="form-group">
       <label class="col-md-4 text-right">Description</label>
       <div class="col-md-8">
        <input type="text" name="description" value="{{ $vehicle->description }}" class="form-control input-lg" />
       </div>
      </div>
      <br />
      <br />
      <br />
      <div class="form-group">
       <label class="col-md-4 text-right">Select Profile Image</label>
       <div class="col-md-8">
        <input type="file" name="image" />
              <img src="{{ URL::to('/') }}/images/{{ $vehicle->image }}" class="img-thumbnail" width="100" />
                        <input type="hidden" name="hidden_image" value="{{ $vehicle->image }}" />
       </div>
      </div>
      <br /><br /><br />
      <div class="form-group text-center">
       <input type="submit" name="edit" class="btn btn-primary input-lg" value="Edit" />
      </div>
     </form>
@endsection