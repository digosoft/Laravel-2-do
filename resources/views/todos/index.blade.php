	@extends('layout.app')
	@section('content')
			<h1 class="text-center my-5">TODOS</h1>
		  
			<div class="row">
				<div class="col-lg-8 offset-2">
					      <div class="card card-default">
					      	<div class="card-header">
					      		TODOS
					      	</div>
					      	<div class="card-body">
					      		<ul class="list-group">
									@foreach($todos as $todo)
										<li class="list-group-item">{{$todo->name }}
											@if($todo->completed == false)
											<a href="{{ route('todos-complete', $todo->id)}}" class="btn btn-warning btn-sm float-right"> Complete</a>
											@endif

											<a href="{{ route('single-todos', $todo->id)}}" class="btn btn-primary btn-sm float-right  mr-2"> view</a>


										</li> 
									@endforeach
								</ul>
					      	</div>
					      </div>

		      		</div>
			</div>
	@endsection