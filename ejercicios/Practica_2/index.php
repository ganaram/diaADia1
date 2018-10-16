<?php

require_once 'helpers.php';

if(isset($_POST['send'])){
    //revisamos que el valor del boton del formulario que es
    //send, se haya enviado.
    
    $name = $_POST['nombre'];
    $surname = $_POST['apellidos'];
    $age = (int)$_POST['edad'];
    $email = $_POST['email'];
    $passwd = $_POST['passwd'];

    //validar si tenemos todos los campos

    if(empty($name)){
        $error['name']['empty'] = "El nombre es requerido.";
    }
    if(empty($surname)){
        $error['surname']['empty'] = "Los apellidos son requeridos.";
    }
    if(empty($age)){
        $error['age']['empty'] = "La edad es requerida.";
    }
    if(empty($email)){
        $error['email']['empty'] = "El E-Mail es requerido.";
    }
    if(empty($passwd)){
        $error['passwd']['empty'] = "La contraseña es requerida.";
    }

    if(!is_string($name) || !preg_match("/^[a-záéíóúA-ZÁÉÍÓÚ\s-]*$/",$name)){
        $error['name']['no_valid'] = "El nombre puede tener letras y espacios.";
    }
    if(!is_string ($surname) || !preg_match("/^[a-záéíóúA-ZÁÉÍÓÚ\s-]*$/",$surname)){
        $error['surname']['no_valid'] = "El apellido puede tener letras y espacios.";
    }
    if(!filter_var($age,FILTER_VALIDATE_INT)){
        $error['age']['no_valid'] = "La edad tiene que ser un número entero.";
    }
    if(!is_string($email || !filter_var($email,FILTER_VALIDATE_EMAIL))){
        $error['email']['no_valid'] = "Debes introducir un Email Válido.";
    }
    if(strlen($name)<3){
        $error['name']['lenght'] = "El nombre debe tener almenos 3 letras.";
    }

    if(strlen($surname)<3){
        $error['surname']['lenght'] = "El apellido debe tener almenos 3 letras.";
    }
    if(strlen($passwd)<5){
        $error['pass']['lenght'] = "La contraseña debe tene al menos 5 letras";
    }


}

if(empty($error)){
    // printDataFormated($error);
    require_once 'views/data.inc.php';
}else{

require_once 'views/form.inc.php';
}
?>
