@extends('layouts.default')



@section('content')

		<h2>Hello , {{ $user->name }}</h2>

		<h2>Your timestamp has been input {{ $user->name }}? </h2>

	
$data = Input::all();
		
		
@stop