<!DOCTYPE html>
<html>
<head>
	<title>Todos Data View</title>
	<link rel="stylesheet" type="text/css" href="{{asset('public/css/bootstrap.css')}}">
</head>
<body>
	<div class="container">		
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
											<a href="{{route('single-todos',$todo->id)}}" class="btn btn-primary btn-sm float-right"> view</a>
										</li> 
									@endforeach
								</ul>
					      	</div>
					      </div>

		      		</div>
			</div>
      </div>
</body>
</html>
