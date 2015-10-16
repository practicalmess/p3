@extends('layouts.master')

@section('title')
	Lorem Ipsum Generator
@stop

@section('subheading')
	<h2>Lorem Ipsum Generator</h2>
@stop

@section('content')
	<form method="POST" action="/lorem/result">
		<input type="hidden" value="{{ csrf_token() }}" name="_token">
		<fieldset>
			<label for="paragraphs">Number of paragraphs:</label>
			<input type="text" id="paragraphs" name="paragraphs">
		</fieldset>
		<br>
		<button type="submit" class="btn btn-primary">Generate text</button>
	</form>
@stop