@extends('layouts.master')

@section('title')
	Developer's Best Friend - Home
@stop

@section('head')
	<link href="/css/index.css" rel="stylesheet">
@stop

@section('subheading')
	<h2>Generate random users and Lorem Ipsum text</h2>
@stop

@section('content')
	<a href="/lorem">
		<div class="nav-block">
			<img src="/images/lorem.jpg" alt="Lorem Ipsum generator screenshot">
			<h3>Lorem Ipsum Generator</h3>
			<p>A simple tool to generate a customizable amount of Lorem Ipsum text with several configurable options.</p>
		</div>
	</a>
	<a href="/random-users">
		<div class="nav-block">
			<img src="/images/users.jpg" alt="Random user generator screenshot">
			<h3>Random User Generator</h3>
			<p>A tool to create any number of random fake 'users', with options for different amounts of detail in the user profiles. Results can be downloaded as a JSON file.</p>
		</div>
	</a>
@stop