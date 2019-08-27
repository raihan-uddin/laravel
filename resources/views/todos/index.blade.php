<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1 class="text-center my-5">TODOS APP</h1>

		<div class="row justify-content-center">
		<div class="col-md-8">
		<div class="card card-default">
			<div class="card-header">Todos</div>
			<div class="card-body">
				<ul class="list-group">	
				@foreach($todos as $todo)
					<li class="list-group-item">{{ $todo->name }}
					<button class="btn btn-primary btn-sm float-right">View</button>
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