
@extends('layout')
@section('content')

<div class="row">
	<div class="col-md-6 col-md-offset-3">	
		<h1>Create a note</h1>
		@include('partials/errors')
		<form method="POST" action="{{url('notes')}}" class="form">
			{!!csrf_field()!!}
		<div class="form-group">
			<textarea name="note" class="form-control" placeholder="Write your note here...">{{old('note')}}</textarea>
			</div>
			<button style="margin-top:5px;"type="submit" class="btn btn-primary">Create note</button>
		</form>
	</div>
</div>
@endsection