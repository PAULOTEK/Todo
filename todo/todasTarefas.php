<!DOCTYPE html>
<html>
<head>
	<title>Super ToDo</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="css/estilo.css">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

</head>
<body>

	<nav class="navbar navback">
		<div class="container">
			<a href="#" class="navbar-brand text-white">
				<img src="img/logo.png" width="35" height="35" class="d-inline-block align-top">
				Super ToDo
			</a>
		</div>
	</nav>

	<div class="container app">
		<div class="row">
			
			<div class="col-md-3 menu">
				<ul class="list-group">
					<li class="list-group-item"><a href="index.php">Tarefas pendentes</a></li>
					<li class="list-group-item"><a href="novaTarefa.php">Nova Tarefa</a></li>
					<li class="list-group-item active"><a href="todasTarefas.php">Todas as tarefas</a></li>
				</ul>
			</div>

			<div class="col-md-9">
				<div class="container pagina">
					<div class="row">
						<div class="col">
							<h4>Todas as tarefas cadastradas</h4>
							<hr/>

						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</body>
</html>