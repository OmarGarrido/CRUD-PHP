<?
$conexion=@mysql_connect("localhost","root","12345678");
$db_name="metro";
$tabla="LINEA_ESTACION";
$hide;

if(!$conexion){
	exit('<p>No pudo realizarce la conexion a la base de datos.</p>');
	}
	if (!@mysql_select_db(metro,$conexion)) {
		echo mysql_errno();
		exit('<p>Problema al seleccionar la base de datos</p>');
	}
	if (!$_GET && !isset($_POST['enviar']) /*($accion)*/){
	?>
<html>
	<head>
		<title>Estaciones de Lineas</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<img class="navbar-brand" style="width: 60px;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3b/Metro_de_la_Ciudad_de_México_logo.svg/1019px-Metro_de_la_Ciudad_de_México_logo.svg.png">
		<ul class="navbar-nav me-auto">
      <li class="nav-item">
          <a class="nav-link active" href="Linea.php">Lineas</a>
          </li>
          <li class="nav-item">
          <a class="nav-link active" href="Estaciones.php">Estaciones</a>
          </li>
          </li>
          <li class="nav-item">
          <a class="nav-link active" href="Estacion-Linea.php">Estacion-Linea</a>
          </li>
          <li class="nav-item">
          <a class="nav-link active" href="Trenes.php">Trenes</a>
          </li>
          <li class="nav-item">
          <a class="nav-link active" href="Acceso.php">Acceos</a>
          </li>
          <li class="nav-item">
          <a class="nav-link active" href="Cochera.php">Cocheras</a>
          </li>
    </ul>
		</div>	
		<form name="buscar" method="post" action="Estacion-Linea.php" class="d-flex">
			<select name="campo">
				<?
				$resultado=mysql_query("show fields from ".$tabla,$conexion);
				while ($row=mysql_fetch_array($resultado)) {
							?>
							<option><? echo $row[0];?></option>
				<?
						}		
				?>
			</select>

	        <input class="form-control me-2" type="search" placeholder="Buscar" name="palabra">
	        <button class="btn btn-outline-success" type="submit" name="enviar">Buscar</button>
      	</form>
		</nav>
		<div class="mt-3" align="center">
			<a class="btn btn-success" href="Estacion-Linea-Insertar.php">Agregar</a></button>
		</div>
	</body>
</html>

<?
$sql="SELECT INDICE,ID_LINEA3,ID_ESTACION4,NOM_ESTACION FROM LINEA_ESTACION INNER JOIN ESTACION ON ID_ESTACION=ID_ESTACION4";
$result=@mysql_query($sql);
if(!$result){
	exit("Error de consulta\n Verifica consulta");
}
if($hide==false){
?>
<html>
	<body>
		<table class="table table-dark table-striped table-hover mt-3" style="text-align: center; width: 800px; text-transform: capitalize;" align="center">
			<thead>
				<tr>
				<th>Indice</th>
				<th>ID Linea</th>
				<th>Nombre Estacion</th>
				<th>Operaciones</th>
			</tr>
			</thead>
			<tbody>
				<?
					while ($row=@mysql_fetch_array($result)) {
						echo "<tr>";
						echo "<td>".$row[0]."</td>";
						echo "<td>".$row[1]."</td>";
						echo "<td>".$row[3]."</td>";
						echo "<td><a class='mx-2 btn btn-danger ml-5' href=".$_SERVER['PHP_SELF']."?borrar=".$row[2].">Borrar</a>";
						echo "</td>";
						echo "</tr>";
					}
				?>
			</tbody>
		</table>
	</body>
</html>

<?
}
}
if (empty($_GET['borrar'])==false)
{
$id=$_GET['borrar'];

		?>
    	<html>
    	<head><title>Eliminando datos</title></head>
    	<body>
		<?
		
		$sql="DELETE FROM ".$tabla." WHERE ID_ESTACION4= '".$id."'";

		
		if(@mysql_query($sql)){

			echo "<p>Elemento eliminado.</p>";
		}
		else{
		 	echo mysql_errno();
			echo "<p>Error al eliminar el elemento.</p>";
		}
		mysql_close($conexion);
		echo "<script>alert('Registro Eliminado');window.location='Estacion-Linea.php';</script>";
	}
  ?>


  <?
if (isset($_POST['enviar'])) {
	$query ="SELECT INDICE,ID_LINEA3,NOM_ESTACION,ID_ESTACION4 from ".$tabla." INNER JOIN ESTACION ON ID_ESTACION=ID_ESTACION4 WHERE {$_POST['campo']} LIKE '%{$_POST['palabra']}%'";
	$resultado=mysql_query($query,$conexion);

?>
<head>
		<title>Estaciones de Lineas</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	</head>
	<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<img class="navbar-brand" style="width: 60px; margin-left: 8px; " src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3b/Metro_de_la_Ciudad_de_México_logo.svg/1019px-Metro_de_la_Ciudad_de_México_logo.svg.png">
		<ul class="navbar-nav">
			<!-- <li class="nav-item">
          <a class="nav-link active" href="#">Cosultas</a>
        	</li>
 -->        	
		</ul>
		</div>	
		</nav>
		<div class="mt-3" align="center">
			<a class="btn btn-danger" href="Estacion-Linea.php">Regresar</a></button>
		</div>
		<table id="texto" class="table table-dark table-striped table-hover mt-3" style="text-align: center; width: 800px; text-transform: capitalize;" align="center">
			<thead>
				<tr>
				<th>Indice</th>
				<th>ID Linea</th>
				<th>Nombre Estacion</th>
				<th>Operaciones</th>
			</tr>
			</thead>
			<tbody>
<?

	$fond =false;
	while ($row=mysql_fetch_array($resultado)) {
		$fond=true;
		?>
			<html>
		
				<?
						echo "<tr>";
						echo "<td>".$row[0]."</td>";
						echo "<td>".$row[1]."</td>";
						echo "<td>".$row[2]."</td>";
						echo "<td>";
						echo "<a class='mx-2 btn btn-danger ml-5' href=".$_SERVER['PHP_SELF']."?borrar=".$row[3].">Borrar</a>";
						echo "</td>";
						echo "</tr>";					
	}
	?>
			</tbody>
		</table>
	</body>
</html>
	<?

	if (!$fond) {
		echo "No se encontró resultado";
	}
}
?>