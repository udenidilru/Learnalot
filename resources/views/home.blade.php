@extends('layouts.app')

@section('content')
@foreach ($admins as $admin)
   @if(auth()->user()->email == $admin->email)
   <div class="card" style="height:600px; width:300px; margin-left:5px; background: #000000">
            <h4 style = "color: #FFD700; margin:30px;">Learnalot</h4>
            <a href="/vehicles">Vehicle management</a>
        </div>
   @else
   <div class="card" style="height:600px; width:300px; margin-left:5px; background: #000000">
            <h4 style = "color: #FFD700; margin:30px;">Learnalot</h4>
            <a href="/vehicles/request">Vehicle Requests</a>
        </div>
   @endif
@endforeach
        
    

@endsection
