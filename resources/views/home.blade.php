@extends('layouts.app')

@section('content')
@foreach ($admins as $admin)
   @if(auth()->user()->email == $admin->email)
   <div class="card" style="height:600px; width:300px; margin-left:5px; background: #000000">
            <h4 style = "color: #FFD700; margin:30px;">Learnalot</h4>
            <a href="/vehicles">Vehicle management</a>
            <a href="/vrequests">Vehicle Requests</a>
            <a href="/chats/create">Chats</a>
        </div>
        @endif
@endforeach

   @foreach ($students as $student)
   @if(auth()->user()->email == $student->email)
   <div class="card" style="height:600px; width:300px; margin-left:5px; background: #000000">
            <h4 style = "color: #FFD700; margin:30px;">Learnalot</h4>
            <a href="/chats/create">Chats</a>
            <a href="/vrequests/create">Vehicle Requests</a>
        </div>
   @endif
@endforeach

@foreach ($admins as $admin)
@if(auth()->user()->email != $admin->email)
@foreach ($students as $student)
   @if(auth()->user()->email != $student->email)
   <div class="card" style="height:600px; width:300px; margin-left:5px; background: #000000">
            <h4 style = "color: #FFD700; margin:30px;">Learnalot</h4>
            <a href="/vrequests/create">Vehicle Requests</a>
        </div>
   @endif
@endforeach
@endif
@endforeach




        
    

@endsection
