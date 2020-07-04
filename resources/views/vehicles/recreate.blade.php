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
<button class="btn btn-primary" type="button" onclick="window.location='{{ url("home") }}'">Back</button>
<!-- <button class="btn btn-primary" type="button" onclick="window.location='{{ url("accept/create") }}'">Admin Chat</button> -->
<div class="card push-top">
  <div class="card-header">
    Add Vehicle Request
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
    {!! Form::open(array('route' => 'vrequests.store','method'=>'POST','files'=>true)) !!}
      <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Your Name:</strong>
                {!! Form::text('uname', null, array('placeholder' => 'Your Name','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Email:</strong>
                {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Phone Number:</strong>
                {!! Form::text('pno', null, array('placeholder' => 'Phone Number','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Vehicle Type:</strong>
                {!! Form::text('class', null, array('placeholder' => 'Class','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Vehicle Model:</strong>
                {!! Form::text('make', null, array('placeholder' => 'Make','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Number:</strong>
                {!! Form::text('number', null, array('placeholder' => 'Number','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>No of Used Years:</strong>
                {!! Form::text('usedyears', null, array('placeholder' => 'Used Years','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                {!! Form::textarea('description', null, array('placeholder' => 'Description','class' => 'form-control','style'=>'height:100px')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Your Suggest Price Of Vehicle(Rs.):</strong>
                {!! Form::text('price', null, array('placeholder' => 'Price','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Upload File:</strong>
                {!! Form::file('image', array('class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    {!! Form::close() !!}
  </div>
</div>
@endsection