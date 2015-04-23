

@extends('layouts.default')



@section('content')

		<h2>Hello , {{ $user->name }}</h2>

		<h2>Are you sure {{ $user->name }}? </h2>

		
			{{ Form::open(array('action'=>'ConfirmController@confirmform')) }}

  <!--Some html here !-->
  <div class="row form-group">
    <div class="col-sm-4">
      <div class="btn btn-success" id="add" onclick="javascript:location.href='/users/{{{$user->name}}}/confirm'"">
         Click and Sign in
      </div>
    </div>
  </div> 


{{ Form::close() }}
		
		
@stop