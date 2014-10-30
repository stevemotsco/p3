@extends('_master')

@section('title')
	Developers Best Friend
@stop

@section('head')
	
@stop

@section('content')
	<div class="wbdr">
	<br/>
	<h2>Lorem Ipsum Generator</h2>
	<h4>Lorem Ipsum is scrambled Latin text which is dummy text used to act as a placeholder in printing and graphic design.  It is used to display the layout of any text in a document, web page, etc. during a demonstration/visual presentation.  It has a normal distribution of letters and words without having readable content to distract the viewer which allows the viewer to focus on the layout, typography, and overall look of whatever is being presented. </h4>
    <!-- PRODUCTION -->
	<a href='/generate-loremipsum'>Generate Lorem Ipsum text</a> 
    <!-- LOCAL 
	<a href='/p3/public/generate-loremipsum'>Generate Lorem Ipsum text</a> -->
	<br/><br/>
	</div>
	<div class="wbdr">
	<br/>		
	<h2>Random User Generator</h2>
	<h4>It is common for someone to need random user data when developing or testing a web site or application.  This random user generator will do this for you.</h4>
    <!-- PRODUCTION -->
	<a href='/generate-user'>Generate Random Users</a> 
    <!-- LOCAL 
	<a href='/p3/public/generate-user'>Generate Random Users</a> -->
	<br/><br/>
	</div>
@stop

@section('nav')
    <!-- PRODUCTION -->
	<br/><a href='/generate-loremipsum'>Lorem Ipsum Generator</a> | <a href='/generate-user'>Random User Generator</a> 
    <!-- LOCAL 
	<br/><a href='/p3/public/generate-loremipsum'>Lorem Ipsum Generator</a> | <a href='/p3/public/generate-user'>Random User Generator</a>  -->
@stop