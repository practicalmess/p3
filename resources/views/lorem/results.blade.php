@extends('layouts.master')

@section('title')
	Lorem Ipsum Generator
@stop

@section('head')
	<link href="/css/generators.css" type='text/css' rel='stylesheet'>
@stop

@section('subheading')
	<h2>Lorem Ipsum Generator</h2>
@stop

@section('content')

	
	@if($type=='words')
		<div class="lorem-ipsum" contenteditable="true">{{$lipsum->words($amount)}}</div>
	@elseif($type=='sentences')
		<div class="lorem-ipsum" contenteditable="true">{{$lipsum->sentences($amount)}}</div>
	@else
		<div class="lorem-ipsum" contenteditable="true">
			{{-- Due to configuration of Lorem Ipsum package used, normal Blade syntax does not render paragraph breaks correctly --}}
			<?php echo $lipsum->paragraphs($amount, 'p') ?>
		</div>
	@endif



@stop
