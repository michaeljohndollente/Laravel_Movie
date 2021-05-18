  <!-- resources/views/index.blade.php -->
  <!doctype html>
 <html lang="en">
 <head>
 <meta charset="UTF-8">
 <title>Actors</title>
 @extends('templates.table_base')
 </head>
 <body>
 @section('body')

 <div class="button-add">
       <a href="{{route('actor.create')}}" class="btn a-btn-slide-text" title="Add Actor">
       <i class="fas fa-plus"></i>
        <!-- <span><strong>ADD</strong></span>             -->
    </a>
</div>

<div class="table-wrapper">
<div class=" content-wrap table-responsive-sm text-center">
<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Email</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
        </tr>
    </thead>
    <tbody>
      @foreach($actors as $actor)
      <tr>
    <td>{{$actor->id}}</td>
    <td>{{$actor->fname}}</td>
    <td>{{$actor->lname}}</td>
    <td>{{$actor->email}}</td>
    <td align="center"><a href="{{ route('actor.edit', $actor->id) }}"><i class="fa fa-pencil-square-o" aria-hidden="true" style="font-size:24px" ></a></i></td>
    <td align="center">{!! Form::open(array('route' => array('actor.destroy', $actor->id),'method'=>'DELETE')) !!}
      <button class="btn"><i class="fa fa-trash-o" style="font-size:24px; color:red" ></i></button></td>
      {!! Form::close() !!}
</tr>
        @endforeach
    </tbody>
    </table>
</div>
<div class="pagination" >{{$actors->links()}}</div>
</div>
</div>
@endsection
 </body>
 </html>