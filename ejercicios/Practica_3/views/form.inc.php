<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Formulario </title>
    <style>
        .form_element{
            margin:10px;

        }
        .error{
            color:red;
            border:1px solid red;
            width:400px;
        }
        </style>
</head>
<body>
    <h1>Práctica 3.</h1>
    <h3>Login básico, introducir Usuario y Contraseña.</h3><hr>
    <form action="" method="post" novalidate>
    <div class="form_element">
    <label for="user">Username:</label>
    <input type="text" name="user" required><br><br>

    <!-- Errores de Validacion-->
    <?php if(isset($error['user'])):?>
        <div class="error">
            <ul>
             <?php foreach ($error['user'] as $msg):?>
                <li><?=$msg?></li>
             <?php endforeach;?>
            </ul>
        </div>
    <?php endif;?>

    </div>
    <div class="form_element">
    <label for="passwd">Password:</label>
    <input type="password" name="passwd" required><br><br>

    <!-- Errores de Validacion-->
    <?php if(isset($error['passwd'])):?>
        <div class="error">
            <ul>
             <?php foreach ($error['passwd'] as $msg):?>
                <li><?=$msg?></li>
             <?php endforeach;?>
            </ul>
        </div>
    <?php endif;?>

    </div>

    <div style="margin-left:1em;">
    <input type="submit" value="Enviar Datos" name="send">
    </div>
    </form>

</body>
</html>