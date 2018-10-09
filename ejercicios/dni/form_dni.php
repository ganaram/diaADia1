<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Formularios</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h1>CALCULADORA DE DNI</h1>
    <p>Solamente tiene que introducir los 8 dígitos y se devolverá junto a la letra.</p>
    <form action="" method="post">
    <label for="dni">Dni : </label>
    <input type="text" name="dni" pattern="[0-9]+">

    <br><br>

    <input type="submit" value="Enviar">

    <?php if(isset($error)) :?>
    <p><?=$error?></p>
    <?php endif;?>
</body>
</html>