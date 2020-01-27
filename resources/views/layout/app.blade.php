<!DOCTYPE html>
<html>
<head>
	<title>Todos Data View</title>
	<link rel="stylesheet" type="text/css" href="{{asset('public/css/bootstrap.min.css')}}">
</head>
<body>

			<ul class="nav navbar-default">
				<a class="navbar-brand" href="#"> </a>
			  <li class="nav-item"> 
			    <a class="nav-link active" href="{{route('home')}}">HOME</a>
			  </li>
			  <li class="nav-item">
			      <a  class="nav-link" href="{{route('todos')}}">Todos</a> 
			  </li>

			  <li class="nav-item">
			      <a  class="nav-link" href="{{route('new-todo')}}">Create Todo</a> 
			  </li>
			 
			</ul>



			 


	<div class="container">	

			@if(session()->has('success'))
				<div class="alert alert-success">
					{{session()->get('success')}}
				</div>
			@endif

			
		@yield('content')
      </div>
</body>
</html>
