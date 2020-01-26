@extends('layout.app')

@section('content')
	<h1 class="text-center">Create Todo</h1>
	<div class="row justify-content-center">
		<div class="col-lg-8 offset-2"> 
			<div class="card card-default">
				<div class="card-header">
					Details 
				</div>
				<div class="card-body">
					@if($errors->any())
						<div class="alert alert-danger">
							<ul>
								@foreach($errors->all() as $error)
									<li>{{ $error}}</li> 
								@endforeach
							</ul>
						</div>

					@endif 
					<form action="{{route('store-todos')}}" method="post">
						@csrf
					  <div class="form-group"> 
					    <input type="text" class="form-control" placeholder="Name" name="name"> 
					  </div>
					  <div class="form-group"> 
					   <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Descriptions" name="description"></textarea>
					   </div>				 
					  <button type="submit" class="btn btn-success">Create todo</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	

@endsection