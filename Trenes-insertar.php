<html>
    <head><title>Inserta Datos</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>
    <body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<img class="navbar-brand" style="width: 60px;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3b/Metro_de_la_Ciudad_de_México_logo.svg/1019px-Metro_de_la_Ciudad_de_México_logo.svg.png">
		<ul class="navbar-nav">
			<!-- <li class="nav-item">
          <a class="nav-link active" href="#">Cosultas</a>
        	</li>
 -->        	
		</ul>
		</div>	
		</nav>

	<div class="row mt-2">
		<div class="col-md-5 mx-auto mt-5">
			<div class="card card text-white bg-dark mb-3">
				<div class="card-body">
					<h1 align="center">Inserta Nuevo Tren</h1>
					<form action="Trenes-insertar2.php" method="POST">
						<div>
							<label>ID Tren:</label>
							<input class="form-control form-input" type="text" align="LEFT" name="ID"/>
						</div>
						<div class="mt-3">
							<label>Modelo:</label>
							<input class="form-control form-input" type="text" align="LEFT" name="Modelo"/>
						</div>
						<div class="mt-3">
							<label>ID Linea:</label>
							<input class="form-control form-input" type="text" align="LEFT" name="Linea"/>
						</div>
						<div class="mt-3">
							<label>ID Cochera:</label>
							<input class="form-control form-input" type="text" align="LEFT" name="Cochera"/>
						</div>
							<input class="btn btn-success mt-5 form-control" type="submit" value="Insertar" name="insertar">
							<a class="btn btn-danger mt-3 form-control" href="Linea.php">Cancelar</a>
					</form>
				</div>
			</div>
		</div>
	</div>			
	</body>
	</html>
