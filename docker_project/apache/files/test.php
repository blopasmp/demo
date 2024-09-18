<!DOCTYPE html>
<html>
<head>
	<title> Tabla de usuarios </title>
</head>
<body>
<table>
	<tr>
		<th>ID</th>
		<th>Nombre</th>
		<th>Apellido</th>
	</tr>
	<?php
	$conn = mysqli_connect("172.18.0.3", "root", "12345678", "db_proyecto");
	if ($conn-> connect_error) {
		die("Error de conexion con la BBDD:". $conn-> connect_error);
	}
	
	$sql = "SELECT id_usuario, nombre, apellido from usuario";
	$result$conn-> query($sql);
	
	if ($result-> num_rows > 0) {
		while ($row = $result-> fetch_assoc()) {
			echo "<tr><td>". $row["id_usuario"] ."</td><td>". $row["Nombre"] ."</td><td>". $row["Apellido"] ."</td></tr>";
		}
		echo "</table>";
	}
	else {
		echo "Sin resultados";
	}
	
	$conn-> close();
	?>
	
</table>
</body>
</html>
