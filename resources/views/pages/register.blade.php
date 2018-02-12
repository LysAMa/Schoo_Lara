@extends('layout.master')

@section('content')

<h2>Register</h2>
@if(count($errors))
	<div class="alert-danger">
		<ul>
			@foreach($errors->all() as $error)
				<li> {{ $error }} </li>
			@endforeach
		</ul>
	</div>
@endif

{!! Form::open(array('route' => 'users.store')) !!}

<div class="form-group">
	{!! Form::label('username') !!}
	{!! Form::text('name',null, array('class' => 'form-control')) !!}
</div>
<div class="form-group">
	{!! Form::label('email') !!}
	{!! Form::text('email',null, array('class' => 'form-control')) !!}
</div>
<div class="form-group">
	{!! Form::label('password') !!}
	<input type="password" name="password" class="form-control">
</div>
{!! Form::token() !!}
{!! Form::submit(null, array('class' => 'btn btn-default'))!!}
{!! Form::close() !!}
@stop