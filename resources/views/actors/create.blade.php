@extends('templates.table_base')
@section('body')
<div class="form-wrapper">
  <h2>Create new actor</h2>
  <form method="post" action="{{route('actor.store')}}" >
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="form-group">
    <label for="fname" class="control-label">First Name</label>
    <input type="text" class="form-control" id="fname" name="fname" >
  </div> 
  <div class="form-group"> 
    <label for="lname" class="control-label">Last name</label>
    <input type="text" class="form-control " id="lname" name="lname" ></text>
  </div> 
  <div class="form-group"> 
    <label for="email" class="control-label">Email</label>
    <input type="email" class="form-control " id="email" name="email" >
  </div>

  <button type="submit" class="btn" style="background-color:#ed6663;">Save</button>
  <a href="{{url()->previous()}}" class="btn btn-default" role="button">Cancel</a>
  </div>     
</div>
</form> 
@endsection