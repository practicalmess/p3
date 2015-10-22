@extends('layouts.master')

@section('title')
	Random User Generator
@stop

@section('head')
	<link href="/css/generators.css" type='text/css' rel='stylesheet'>
@stop

@section('nav')
	<a href="/">&larr; Home</a>
@stop

@section('heading')
	<h2>Random User Generator</h2>
@stop

@section('content')

	@if(count($errors) > 0)
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
	@endif

	<form method="POST" action="/random-users">
		<input type="hidden" value="{{ csrf_token() }}" name="_token">
		<fieldset>
			<label for="amount">How many users?</label>
			<input type="text" id="amount" name="amount" size="4" maxlength="2">
				 (Max: 50)
			<br>
			<label for="type">Info to be included (name is included by default):</label>
				<br>
				<input type="checkbox" name="address" value="address">Address
				<br>
				<input type="checkbox" name="phone" value="phone">Phone Number
				<br><input type="checkbox" name="email" value="email">Email Address
				<br><input type="checkbox" name="cat" value="cat">Cat
			
		</fieldset>
		<br>
		<button type="submit" class="btn btn-primary">Generate Users</button>
	</form>

	@if(isset($users))
	<h3 id="results-head">Fake Users</h3>
	<div class="result">
		<div class="users">
		<ol>
		@foreach($users as $user)
			<li><strong>{{$user['name']}}</strong>
				<br>
				@if(isset($user['address']))
					{{$user['address']}}
					<br>
				@endif
				@if(isset($user['phone']))
					{{$user['phone']}}
					<br>
				@endif
				@if(isset($user['email']))
					{{$user['email']}}
					<br>
				@endif
				@if(isset($user['cat']))
					<img src="{{$user['cat']}}">
				@endif
			</li>
		@endforeach
		</ol>
		</div>
		<a class="btn btn-info" href="/downloadtool.php">Download as JSON</a>
	</div>
		
	@endif




@stop