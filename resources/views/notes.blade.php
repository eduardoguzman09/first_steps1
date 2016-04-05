@extends('layout')

	<style type="text/css">
	
		ul{
			list-style: none;
		}
	</style>

@section('content')
	<div style="border:solid;margin-top: 30px;background-color: #FFB533;padding-bottom: 5px;">
		<center>

		<h2>Notes</h2>
		<p>	
<a href="/notes/create">add a note</a>
		</p>
			<ul>
				@foreach($notes as $note)
					<li>
						{{$note->note}}
					</li>
				@endforeach
			</ul>



		<form method="post">
			{!! csrf_field()!!}
	<!--<input type="text" name="_token" value="{{csrf_token()}}"></input>-->
			<textarea>
			</textarea>
			<button type="submit">
				Create note
			</button>
		</form>
		</center>
	</div>
	@endsection