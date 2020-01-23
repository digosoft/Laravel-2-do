<!DOCTYPE html>
<html>
<head>
	<title>Todos Item</title>
	<link rel="stylesheet" type="text/css" href="{{asset('public/css/bootstrap.css')}}">
</head>
<body>
	<div class="container">
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
			</div>
		</div>
	</div>


</body>
</html>