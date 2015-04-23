
@extends('layouts.default')



@section('content')

		<h2>Hello , {{ $user->name }}</h2>

		<h2>Are you sure you want to sign in, {{ $user->name }}? </h2>

		{{ Form::submit('Yes') }}

		
		
@stop