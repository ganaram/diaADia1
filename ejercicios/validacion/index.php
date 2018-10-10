<?php

if(isset($_POST['form_alta'])){
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $email = $_POST['email'];
    $edad = $_POST['edad'];
    $sexo = $_POST['sexo'];
    $extranjero = (isset($_POST['extranjero'])) ? "Sí":"No";

    // verificar que se han introducido todos los campos

    if(empty($nombre)){
        $error['nombre'] = ['campo vacío' => 'El campo nombre es obligatorio'];
    }if(empty($apellidos)){
        $error['apellidos'] = ['campo vacío' => 'El campo apellidos es obligatorio'];
    }if(empty($edad)){
        $error['edad'] = ['campo vacío' => 'El campo edad es obligatorio'];
    }if(empty($email)){
        $error['email'] = ['campo vacío' => 'El campo email es obligatorio'];
    }if(empty($sexo)){
        $error['sexo'] = ['campo vacío' => 'El campo sexo es obligatorio'];
    }
    //validacion
        if(!preg_match("/[a-zA-Z]+/",$nombre)){
            echo "Tiene que ser sin tilde y sin espacios."
        }

        require_once 'form_sended.inc.php';

}else{

require_once 'form.inc.php';
}