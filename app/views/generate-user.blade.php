@extends('_master')

@section('title')
	Random User Generator
@stop


@section('head')

@stop


@section('content')
	<h1>Random User Generator</h1>
	{{ Form::open(array("url" => "generate-user", "method" => "GET")) }}

		<p>{{ Form::label("quantity", "How many Random Users do you desire? (Max of 99)"); }}</p>
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

	@if(isset($outputUsers))
		<br/>				
		<table>
			<tr class="hdr">
				<td>
					Name
				</td>
				<td>
					Birthday
				</td>
				<td>
					Phone Number
				</td>
				<td>
					Email
				</td>
				<td>
					Address
				</td>
			</tr>
			@foreach($outputUsers as $outputUser)
				<tr>
					<td>
						{{ $outputUser['name'] }}
					</td>
					<td>
						{{ $outputUser['bday'] }}
					</td>
					<td>
						{{ $outputUser['phone'] }}
					</td>
					<td>
						{{ $outputUser['email'] }}
					</td>
					<td>
						{{ $outputUser['address'] }}
					</td>
				</tr>
			@endforeach
		</table>
	@endif 
@stop


@section('nav')
	<!-- PRODUCTION -->
	<br/><a href='/'>&larr; HOME</a> | <a href='/generate-loremipsum'>Lorem Ipsum Generator</a>  
    <!-- LOCAL 
	<br/><a href='/p3/public/'>&larr; HOME</a> | <a href='/p3/public/generate-loremipsum'>Lorem Ipsum Generator</a> -->
@stop
