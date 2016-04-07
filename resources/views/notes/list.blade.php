
@extends('layout')

	




	
@section('content')

<script>
	var page="home";
</script>
	<div class="container-fluid ">
		<div  class="divcl  col-lg-4">
			<h2>Notes</h2>
				<a href="/notes/create" class="a">Add note</a>
			
				<ul>
					@foreach($notes as $note)
						<li>
							{{$note->note}}
						</li>
					@endforeach
				</ul>

		</div>
		<div class=" a  col-lg-4" style="background-color: red;">
			<button class="btn btn-success">clik here</button>
		</div>


<div class="a  col-lg-4"style="background-color: blue;" >
			<img src="/images/m.gif" id="draggable" width="70px" height="70px">
			<img src="/images/celular1.png" id="draggable2"width="70px" height="70px">

			<img src="/images/celular2.jpg" id="draggable3" width="70px" height="70px">

			<img src="/images/celular3.png" id="draggable4" width="70px" height="70px">
			</div>

		
	</div>


	@endsection





	






	
