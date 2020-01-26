	@extends('layout.app')
	@section('content')

		<h1 class="text-center my-5">{{$todo->name}}</h1>
		<div class="row"> 
			<div class="col-lg-8 offset-2">
				<div class="card card-default">
					<div class="card-header">
						Details 
					</div>
					<div class="card-body">
						{{$todo->description}}
					</div>

				</div>
				
				<a class="btn btn-info btn-sm my-3" href="{{ route('edit-todos', $todo->id) }}"> Edit </a>
				
			</div>
		</div>
	@endsection