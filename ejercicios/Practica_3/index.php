<?php

if(isset($_POST['send'])){
    //declaramos variables en caso de que
    //se haya enviado el formulario
    $user = $_POST['user'];
    $passwd = $_POST['passwd'];

    if(!preg_match("/^[a-z\d_]{2,20}$/i",$user)){
        $error['user']['not_valid'] = "Introduzca un nombre de usuario correcto. No puede contener
        espacios.";
    }if(strlen($user)<5 ){
        $error['user']['min_lenght'] = "El usuario debe tener almenos 5 caracteres.";
    }if(strlen($user)>20 ){
        $error['user']['max_lenght'] = "El usuario no puede tener más de 20 caracteres.";
    }if(!preg_match("/^[a-z]{3,}[A-Z]{3,}[0-9]{3,}$/
",$passwd)){
        $error['passwd']['not_valid'] = "Introduzca una contraseña válida. Mínimo 3 dígitos, 
        3 mayúsculas y 3 minúsculas.";  
    }if(strlen($passwd)<9){
        $error['passwd']['min_length'] = "La contraseña debe tener almenos 9 caracteres.";
    }
}else{
    require_once 'views/form.inc.php';
    die();
}
    
    if(!isset($error)){
        // printDataFormated($error);
        require_once 'views/data.inc.php';
    }else{
    
    require_once 'views/form.inc.php';
    }
    ?>