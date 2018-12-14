@extends('layouts.default',['title'=>'about'])

@section('content')
<h1 class="text-center">About</h1>

<div class="container">
	<h2>What is {{config('app.name')}}?</h2>
	<p>{{config('app.name')}} is a clone app of <a href="https://laramap.com" target="_blank"> Laramap.com.</a>

		<div class="row">
			<div class="alert alert-wrapping">
				<p class="alert alert-warning">
					<strong><i class="fas fa-exclamation-triangle"></i>This app been built by <a href="https://twitter.com/etsmo"> @etsmo </a>for learning purposes.</strong>
				</p>
			</div>
		</div>

		<p>Feel free to help to improve the<a href="https://github.com/djiby007/laracart">source code </a>.</p>

		<hr>

		<h2>What is Laramap?</h2>
		<p>Laramap is the website by which Laracarte was inspired :).</p>
		<p>More info <a href="https://laramap.com/p/about">here</a>.</p>

		<hr>

		<h2>Which tools and services are used in {{config('app.name')}}?</h2>
		<p>Basically it's built on Laravel & Bootstrap. But there's a bunch of services used for email and other sections.</p>
		<ul>
			<li>Laravel</li>
			<li>Bootstrap
			<li>Amazon S3
			<li>Mandrill
			<li>Google Maps
			<li>Gravatar
			<li>Antony Martin's </li>Geolocation Package
			<li>Michel Fortin's Markdown Parser Package</li>
			<li>Heroku</li>
		</ul>
</div>
@stop