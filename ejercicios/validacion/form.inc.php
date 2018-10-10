<!Doctype <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Validando</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h1> Valdiando Formularios con PHP</h1>
    <form action="" method="post">

    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre"><br><br>

    <label for="apellidos">Apellidos:</label>
    <input type="text" name="apellidos"><br><br>

    
    <label for="edad">Edad:</label>
    <input type="number" name="edad"><br><br>

    <label for="email">E-Mail:</label>
    <input type="email" name="email"><br><br>

    <label for="sexo">Sexo:</label>
    <select name="sexo" id="">
        <option value="-" selected>Sexo</option>
        <option value="Hombre">Hombre</option>
        <option value="Mujer">Mujer</option>
    </select><br><br>

    <label for="extranjero">Extranjero: </label>
    <input type="checkbox"  name="extranjero" value="1"><br><br>

    <input type="submit" value="Enviar Datos" name="form_alta">
    

    </form>
</body>
</html>