@extends('layout.master')

@section('content')

<h2>Login</h2>

{!! Form::open(array('route' => 'handleLogin')) !!}

<div class="form-group">
	{!! Form::label('email') !!}
	{!! Form::text('email',null, array('class' => 'form-control')) !!}
</div>
<div class="form-group">
	{!! Form::label('password') !!}
	<input type="password" name="password" class="form-control">
{!! Form::token() !!}
{!! Form::submit('Login', array('class' => 'btn btn-default'))!!}
{!! Form::close() !!}
@stop