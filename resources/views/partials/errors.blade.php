@if (!$errors->isEmpty())
		<div class="alert alert-danger">
		<p><strong>Sorry!!</strong>Please fix the following errors lalo:</p>
		<ul>
			@foreach($errors->all()as $error)
			<li>{{$error}}</li>
			@endforeach
		</ul>	
		</div>
@endif