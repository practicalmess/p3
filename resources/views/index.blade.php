@extends('layouts.master')

@section('title')
	Home
@stop

@section('head')
	<link href="/css/index.css" rel="stylesheet">
@stop

@section('heading')
	<h1>The Developer's Best Friend</h1>
@stop

@section('content')
	<div class="container">
		<div class="row row-eq-height">
			<div class="col-md-6 pull-left nav-block">
				<a href="/lorem">
					<h2>Lorem Ipsum</h2>
					<p>A simple tool to generate a customizable amount of Lorem Ipsum by the word, sentence, or paragraph.</p>
				</a>
			</div>
			<div class="col-md-6 pull-right nav-block">
				<a href="/random-users">
					<h2>Random Users</h2>
					<p>A tool to create any number of random fake 'users', with options for different amounts of detail in the user profiles. Results can be downloaded as a JSON file.</p>
				</a>
			</div>
		</div>
	</div>
@stop