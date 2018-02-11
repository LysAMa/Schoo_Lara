@extends('layout.master')

@section('content')

	<h1>Welcome to your profile {{ \Auth::user()->name}}</h1>

	@if(\Auth::check())
		<a href="{{ route('logout')}}" class="btn btn-info">Logout</a>
	@else
		{{link_to_route('login', 'Login')}}
	@endif
	

@endSection