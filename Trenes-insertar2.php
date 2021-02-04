<?php
$dbhost="localhost";  // host del MySQL (generalmente localhost)
$dbusuario="root"; // aqui debes ingresar el nombre de usuario
                      // para acceder a la base
$dbpassword="12345678"; // password de acceso para el usuario de la
                      // linea anterior
$db_name="metro";        // Seleccionamos la base con la cual trabajar
$db_table_name="TRENES";

$db_connection = @mysql_connect($dbhost, $dbusuario, $dbpassword);

if(!$db_connection){
	die('No se ha podido conectar a la base de datos');
}
$subs_id =utf8_decode($_POST['ID']);
$subs_modelo =utf8_decode($_POST['Modelo']);
$subs_linea =utf8_decode($_POST['Linea']);
$subs_cochera =utf8_decode($_POST['Cochera']);


  $insert_value ='INSERT INTO `' . $db_name . '`.`'.$db_table_name.'` (`ID_TREN`, `MODELO`, `ID_LINEA2`,`ID_COCHERA2`) VALUES ("' . $subs_id . '","' . $subs_modelo . '","'.$subs_linea.'","'.$subs_cochera.'")';                       


mysql_select_db($db_name, $db_connection);
$retry_value = mysql_query($insert_value, $db_connection); 

if(!$retry_value){
die('ERROR: ' . mysql_error());
}

mysql_close($db_connection);
?>
<html>
    	<head>
    		<title>Insertado datos</title>
    		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    	</head>
    	<body>
    		<script>alert("Registro Insertado");window.location="TRENES.php";</script>
	</body>
	</html>


