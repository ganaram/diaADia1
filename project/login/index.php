<?php
    require_once '../database/conexion.php';
    require_once '../setup.php';

    $loginCorrecto = false;
    $ip = $_SERVER['REMOTE_ADDR'];
    if(isset($_SESSION['userdata'])){
        header("Location: ".APP_URL);
    }

    if(isset($_POST['login'])){
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
    }

    if(empty($username)){
        $errors['username']['empty'] = "Debes introducir un nombre de usuario";
        $username = null;
    }if(empty($password)){
        $errors['password']['empty'] = "Debes introducir una password";
        $password = null;
    }
    
    if(empty($errors)){
        $sql = "SELECT * FROM users WHERE username = '$username' LIMIT 1";

        $login = mysqli_query($db, $sql);

        if($login && mysqli_num_rows($login) == 1){

            $usuario = mysqli_fetch_assoc($login);

            $loginCorrecto=true;

            $query = "INSERT INTO logins VALUES(null,$username,$password,NOW(),$loginCorrecto,$ip)";

            $result = mysqli_query($db,$query);

            if(password_verify($password,$usuario['password'])){
                // Creo sesion de usuario
                $_SESSION['userdata'] = $usuario;
                header("Location: ".APP_URL);
            }else{
                $errors['login']['password'] = "La contraseña no es correcta.";
                //echo $errors['login']['password'];
            }
        }else{

            $query = "INSERT INTO logins VALUES(null,$username,$password,NOW(),$loginCorrecto,$ip)";
            $result = mysqli_query($db,$query);
            
            $errors['login']['username'] = "El usuario no es correcto.";
            //echo  $errors['login']['username'];
        }
    }

    require_once 'login.view.php';
    ?>