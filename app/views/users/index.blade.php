

@extends('layouts.default')



@section('content')

{{ Form::open(['method' => 'GET']) }}

	{{ Form::input('search', 'q', null, ['placeholder' => 'Search...'])}}
	{{ Form::close() }}


		<h2>Volunteers Checked In</h2>

	<!-- 	@foreach ($users as $q)
		
			<li>{{ link_to("/users/{$q->name}" , $q->name) }}</li>

		@endforeach -->



	<table class="table table-hover table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Last Time</td>
            <td>Action</td>
            
        </tr>
    </thead>
    <tbody>

     

    @foreach($users as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->updated_at }}</td>
          
           
            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->

                <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                <a class="btn btn-small btn-success" href="{{ URL::to('users/' . $value->name) }}">Sign in/out</a>

                <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ URL::to('users/' . $value->name . '/edit') }}">Edit this Volunteer</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@stop

<?php
$query="INSERT INTO users(name,id,updated_at) VALUES ('$value->name','$value->id', CURRENT_TIMESTAMP)";
?>
