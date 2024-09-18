<?php
// Conexion a la base de datos (reemplaza con tus datos)
$servername = "prueba_mysql";
$username = "root";
$password = "12345678";
$dbname = "db_proyecto"; // Nombre de tu base de datos

// Crear conexion
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificar conexion
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Seleccionar los campos especificados de la tabla 'usuarios'
$sql = "SELECT ID_usuario, Nombre, Apellido FROM usuario";
$result = mysqli_query($conn, $sql);

// Mostrar resultados en una tabla HTML
if (mysqli_num_rows($result) > 0) {
  echo "<table><tr><th>ID</th><th>Nombre</th><th>Apellido</th></tr>";
  while($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>" . $row["ID_usuario"] . "</td><td>" . $row["Nombre"] . "</td><td>" . $row["Apellido"] . "</td></tr>";
  }
  echo "</table>";
} else {
  echo "No se encontraron usuarios.";
}

mysqli_close($conn);
?>
