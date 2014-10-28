@extends('_master')

@section('title')
	Lorem Ipsum Generator
@stop


@section('head')

@stop


@section('content')
	<h1>Lorem Ipsum Generator</h1>
<!--PRODUCTION
    <form method="POST" action="/p3/public/generate-user" accept-charset="UTF-8"> -->
<!--LOCAL -->


<!--	<form method="POST" action="/p3/public/generate-user" accept-charset="UTF-8">
		<input name="_token" type="hidden" value="d0zeiikuqcXntow6KimPqIvPTcqQ6Us4xGt8aOik">

-->
	<div>
		{{ Form::open(array("url" => "generate-loremipsum", "method" => "GET")) }}

			{{ Form::label("quantity", "How many Lorem Ipsum paragraphs do you desire? (Max of 99)"); }}
			<br/><br/>
			{{ Form::text("quantity", Input::get("quantity")); }}
			<br/><br/>
			{{ Form::submit("submit", array("class" => "btn btn-success btn-lg", "name" => "submit")); }}

		{{ Form::close() }}
	</div>
@stop


@section('results')

	<div>
		@if(isset($outputMsg))
		<p id="outputMsg">{{ $outputMsg }}</p>
		@endif

		@if(isset($outputLoremIpsums))
			<div>				
				@foreach($outputLoremIpsums as $outputLoremIpsum)
					<p>{{ $outputLoremIpsum }}</P>
				@endforeach
			</div>
		@endif
	</div>
@stop


@section('nav')
	<!-- PRODUCTION 
	<li><a href='/'>&larr; HOME</a></li>
 	<li><a href='/generate-user'>Random User Generator</a></li> -->
    <!-- LOCAL -->
	<li><a href='/p3/public/'>&larr; HOME</a> | <a href='/p3/public/generate-user'>Random User Generator</a></li>

@stop