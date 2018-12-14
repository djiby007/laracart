@extends('layouts.default',['title'=>'about'])

@section('content')
<h1 class="text-center">Inscription</h1>

<div class="container">
	<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
		<h2>Get In Touch</h2> 
			<p class="text-muted">If you having trouble with this service, please <a href="mailto:djibydjiby55@gmail.com">ask for help</a>.</p>


			<form action="#" method="POST">
				<div class="form-group">
					<label for="name" class="control-label">Name</label>
				<input type="text" name="name" id="name" class="form-control" required="">

				</div>

				<div class="form-group">
					<label for="name" class="control-label">email</label>
					<input type="text" name="name" id="name" class="form-control" required="">
					
				</div>

				<div class="form-group">
					<label for="email" class="control-label sr-only">email</label>
					<textarea name="message" id="message" class="form-control" rows="10" cols="10"></textarea> 
				</div>	

				<div class="form-group">
					<button class="btn btn-primary btn-block">submit Enqury &raquo</button>
				</div>
			</form>
	</div>

		
</div>
@stop