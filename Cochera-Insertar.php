<html>
    <head><title>Inserta Datos</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>
    <body>
	<div class="row mt-2">
		<div class="col-md-5 mx-auto mt-5">
			<div class="card card text-white bg-dark mb-3">
				<div class="card-body">
					<h1 align="center">Inserta Nueva Cochera</h1>
					<form action="Cochera-Insertar2.php" method="POST">
						<div>
							<label>ID Cochera:</label>
							<input class="form-control form-input" type="text" align="LEFT" name="ID"/>
						</div>
						<div class="mt-3">
							<label>Nombre De Cochera:</label>
							<input class="form-control form-input" type="text" align="LEFT" name="Nombre"/>
						</div>
						<div class="mt-3">
							<label>ID Estacion:</label>
							<input class="form-control form-input" type="text" align="LEFT" name="Estacion"/>
						</div>
							<input class="btn btn-success mt-5 form-control" type="submit" value="Insertar" name="insertar">
							<a class="btn btn-danger mt-3 form-control" href="Cochera.php">Cancelar</a>
					</form>
				</div>
			</div>
		</div>
	</div>			
	</body>
	</html>
