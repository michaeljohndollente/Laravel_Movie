@extends('templates.table_base')
@section('body')
<div class="form-wrapper">
  <h2>Edit Actor</h2>
   {{ Form::model($actors,['route' => ['actor.update',$actors->id]]) }}
    {{csrf_field()}}
    {{ method_field('PATCH') }}
  <div class="form-group">
    <label for="fname" class="control-label">First Name</label>
    {{ Form::text('fname',null,array('class'=>'form-control','id'=>'fname')) }}
  </div> 
  <div class="form-group">
    <label for="lname" class="control-label">Last Name</label>
    {{ Form::text('lname',null,array('class'=>'form-control','id'=>'lname')) }}
  </div> 
  <div class="form-group">
    <label for="email" class="control-label">Email</label>
    {{ Form::text('email',null,array('class'=>'form-control','id'=>'email')) }}
  </div> 
  <button type="submit" class="btn" style="background-color:#ed6663;">Save</button>
  <a href="{{url()->previous()}}" class="btn btn-default" role="button">Cancel</a>
  </div>     
</div>
{!! Form::close() !!} 
@endsection