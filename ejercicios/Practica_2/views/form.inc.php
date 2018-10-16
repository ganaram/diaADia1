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
    <h1>Práctica 2.</h1>
    <h3>Rellene los datos indicados</h3><hr>
    <form action="" method="post" novalidate>
    <div class="form_element">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre"><br><br>

    <!-- Errores de Validacion-->
    <?php if(isset($error['name'])):?>
        <div class="error">
            <ul>
             <?php foreach ($error['name'] as $msg):?>
                <li><?=$msg?></li>
             <?php endforeach;?>
            </ul>
        </div>
    <?php endif;?>

    </div>
    <div class="form_element">
    <label for="apellidos">Apellidos:</label>
    <input type="text" name="apellidos"><br><br>

    <!-- Errores de Validacion-->
    <?php if(isset($error['surname'])):?>
        <div class="error">
            <ul>
             <?php foreach ($error['surname'] as $msg):?>
                <li><?=$msg?></li>
             <?php endforeach;?>
            </ul>
        </div>
    <?php endif;?>

    </div>
    
    <div class="form_element">
    <label for="edad">Edad:</label>
    <input type="number" name="edad"><br><br>

        <!-- Errores de Validacion-->
        <?php if(isset($error['age'])):?>
        <div class="error">
            <ul>
             <?php foreach ($error['age'] as $msg):?>
                <li><?=$msg?></li>
             <?php endforeach;?>
            </ul>
        </div>
    <?php endif;?>

    </div>

    <div class="form_element">
    <label for="email">E-Mail:</label>
    <input type="email" name="email"><br><br>

        <!-- Errores de Validacion-->
        <?php if(isset($error['email'])):?>
        <div class="error">
            <ul>
             <?php foreach ($error['email'] as $msg):?>
                <li><?=$msg?></li>
             <?php endforeach;?>
            </ul>
        </div>
    <?php endif;?>

    </div>

    <div class="form_element">
    <label for="Password">Password:</label>
    <input type="password" name="passwd">

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

    <input type="submit" value="Enviar Datos" name="send">
    
    </form>
</body>
</html>