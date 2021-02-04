<html>
    <head><title>Inserta Datos</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>
    <body>
	<div class="row mt-5">
		<div class="col-md-5 mx-auto mt-5">
			<div class="card card text-white bg-dark mb-3">
				<div class="card-body">
					<h1 align="center">Inserta Datos</h1>
					<form action="Estacion-Linea-Insertar2.php" method="POST">
						<div>
							<label>Indice:</label>
							<input class="form-control form-input" type="text" align="LEFT" name="INDICE"/>
						</div>
						<div class="mt-3">
							<label>ID Linea:</label>
							<input class="form-control form-input" type="text" align="LEFT" name="ID_LINEA3"/>
						</div>
						<div class="mt-3">
							<label>ID Estacion:</label>
							<input class="form-control form-input" type="text" align="LEFT" name="ID_ESTACION4"/>
						</div>
							<input class="btn btn-success mt-5" type="submit" value="Insertar" name="insertar">
					</form>
				</div>
			</div>
		</div>
	</div>			
		
	<div align="center"><a class="btn btn-danger" href="Estacion-Linea.php">Regresar</a></div>

	</body>
	</html>
