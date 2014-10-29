@extends('_master')

@section('title')
	Lorem Ipsum Generator
@stop


@section('head')

@stop


@section('content')
	<h1>Lorem Ipsum Generator</h1>
	{{ Form::open(array("url" => "generate-loremipsum", "method" => "GET")) }}

		{{ Form::label("quantity", "How many Lorem Ipsum paragraphs do you desire? (Max of 99)"); }}
		<br/><br/>
		{{ Form::text("quantity", Input::get("quantity")); }}
		<br/><br/>
		{{ Form::submit("submit", array("class" => "btn btn-primary btn-lg", "name" => "submit")); }}

	{{ Form::close() }}
@stop


@section('results')
	@if(isset($outputMsg))
		<br/><p id="outputMsg">{{ $outputMsg }}</p>
	@endif

	@if(isset($outputLoremIpsums))
		<br/>				
		@foreach($outputLoremIpsums as $outputLoremIpsum)
			<p>{{ $outputLoremIpsum }}</P>
		@endforeach
	@endif
@stop


@section('nav')
	<!-- PRODUCTION 
	<br/><a href='/'>&larr; HOME</a> | <a href='/generate-user'>Random User Generator</a>  -->
    <!-- LOCAL -->
	<br/><a href='/p3/public/'>&larr; HOME</a> | <a href='/p3/public/generate-user'>Random User Generator</a>
@stop