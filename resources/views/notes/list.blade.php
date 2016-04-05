@extends('layout')

	<style type="text/css">
	
		ul{
			list-style: none;
		}
		.divcl{
			border:solid;margin-top: 30px;background-color: #FFB533;padding-bottom: 5px;
		}
	</style>

@section('content')
	<div  class="divcl">
		<center><h2>Notes</h2>
			<a href="/notes/create">Add note</a>
			<a href="/notes/objectnote">move images</a>
			<ul>
				@foreach($notes as $note)
					<li>
						{{$note->note}}
					</li>
				@endforeach
			</ul>




		<!--<form method="post" type="">
			{!! csrf_field()!!}
	<!--<input type="text" name="_token" value="{{csrf_token()}}"></input>-->
			<!--<textarea>
			</textarea>
			<button type="submit">
				Create note
			</button>
		</form>-->
		</center>
	</div>
	@endsection