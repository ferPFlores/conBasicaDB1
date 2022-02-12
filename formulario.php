<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
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
    <form action="store.php" method="POST">
    <label for="nombre">Nombre</label>  
    <input type="text" name="nombre" id="Nombre">
    <label for="apellido">Apellido</label>  
    <input type="text" name="apellido" id="apellido">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>