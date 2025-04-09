<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista Crear</title>
</head>
<body>
    <form action="{{route('productos.formdata')}}" method="post">
        <label>Nombre:</label>
        <input type="text" name="nombre"><br><br>

        <label>Precio:</label>
        <input type="text" name="precio"><br><br>

        <label>Existencias:</label>
        <input type="text" name="existencias"><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>