@extends('layouts.app')

@section('content')

<style>
    .container {
      max-width: 450px;
    }
    .push-top {
      margin-top: 10px;
    }
    .card {
        height:400px;
        width:400px;
        margin-left:50px;
    }
    .card-body{
        height:400px;
        width:400px;
        margin-left:50px;
    }
</style>
<div class="row">
<button style="margin-left:20px;" class="btn btn-primary" type="button" onclick="window.location='{{ url("home") }}'"><i class="fas fa-angle-left"></i></button>
<div style="font-size:30px; margin-left:200px;">Announcements</div>
</div>
<div style="width:1000px; height:500px; margin-left:200px;overflow-y: scroll;overflow-x: hidden;">
<ul class="list-group">
@foreach($chat as $chats)
<div class="row">
    <li class="list-group-item list-group-item-success" style="word-break: break-all;margin-top:20px; width:800px; margin-left:50px">{{$chats->message}}</li>
    @foreach ($admins as $admin)
   @if(auth()->user()->email == $admin->email)
    <form action="{{ route('asannounse.destroy', $chats->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button style="margin-top:20px;" class="btn btn-danger btn-sm" type="submit"><i class="fas fa-trash"></i></button>
                  </form>
                  @endif
@endforeach
</div>
@endforeach
</ul>

</div>
@foreach ($admins as $admin)
   @if(auth()->user()->email == $admin->email)
   
  <div style="width:950px;margin-left:230px;"  >
    
      <form method="post" action="{{ route('asannounse.store') }}">
          <div class="form-group">
              @csrf
              <!-- <label for="message">Message</label> -->
              <input style="margin-top:20px;" placeholder="Type here........" type="text" class="form-control" name="message"/>
              
          </div>
          <!-- <button style="width:100px:" type="submit" class="btn btn-block btn-danger">Send</button> -->
          
          
      </form>
  </div>
  </div>
  @endif
@endforeach
</div>
@endsection