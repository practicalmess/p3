@extends('layouts.master')

@section('title')
	Lorem Ipsum Generator
@stop

@section('head')
	<link href="/css/generators.css" type='text/css' rel='stylesheet'>
@stop

@section('nav')
	<a href="/">&larr; Home</a>
@stop

@section('heading')
	<h2>Lorem Ipsum Generator</h2>
@stop

@section('content')

	@if(count($errors) > 0)
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
	@endif

	<form method="POST" action="/lorem">
		<input type="hidden" value="{{ csrf_token() }}" name="_token">
		<fieldset>
			<label for="type">Type of output:</label><br>
				<div class="options">
					<input type="radio" name="type" value="words" class="option">Words<br>
					<input type="radio" name="type" value="sentences" class="opt">Sentences<br>
					<input type="radio" name="type" value="paragraphs">Paragraphs<br>
				</div>
			<label for="amount">How many?</label>
			<input type="text" id="amount" name="amount">
		</fieldset>
		<br>
		<button type="submit" class="btn btn-primary">Generate text</button>
	</form>


	@if(isset($type))
		<div class="result">
			<h3 id="results-head">Filler Text</h3>
			@if($type=='words')
			<textarea class="lorem-ipsum">{{$lipsum->words($amount)}}</textarea>
				<br>
				<button class="btn btn-info" onclick="$('.lorem-ipsum').focus().select()">Select Text</button>
			@elseif($type=='sentences')
			<textarea class="lorem-ipsum">{{$lipsum->sentences($amount)}}</textarea>
				<br>
				<button class="btn btn-info" onclick="$('.lorem-ipsum').focus().select()">Select Text</button>
			@else
			<div class="lorem-ipsum" contenteditable="true">
				{{-- Due to configuration of Lorem Ipsum package used, normal Blade syntax does not render paragraph breaks correctly --}}
				<?php echo $lipsum->paragraphs($amount, 'p') ?>
			</div>
			@endif
		</div>
	@endif
@stop