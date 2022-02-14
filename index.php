<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario basicote</title>
</head>
<body>
    <h1>Bienvenido</h1>
    <ul>
        <li>
            <a href="index.php">Inicio</a>
        </li>
        <li>
            <a href="formulario.php">Formulario</a>
        </li>
    </ul>
    <?php
	require 'conexion.php';
	$sql = "SELECT * FROM registros";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
 
  // Configura los resultados como un arreglo asociativo
  $stmt->setFetchMode(PDO::FETCH_ASSOC);
  
  // $stmt->fetchAll() Obtiene el arreglo asociativo
foreach($stmt as $row) {
   echo $row['id'] ."  " ;
   echo $row['nombre']. " ";
   echo $row['apellido'];
   echo "<br>";
  }
	?>


</body>
</html>