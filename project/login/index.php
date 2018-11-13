<?php
    require_once '../database/conexion.php';

    if(isset($_POST['login'])){
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
    }

    if(empty($username)){
        $errors['username']['empty'] = "Deebs introducir un nombre de usuario";
        $username = null;
    }if(empty($password)){
        $errors['password']['empty'] = "Deebs introducir una password";
        $password = null;
    }
    
    if(empty($errors)){
        $sql = "SELECT * FROM users WHERE username = '$username' LIMIT 1";

        $login = mysqli_query($db, $sql);

        if($login && mysqli_num_rows($login) == 1){

            $usuario = mysqli_fetch_assoc($login);

            if(password_verify($password,$usuario['password'])){
                // Creo sesion de usuario
                $_SESSION['userdata'] = $usuario;
                header("Location: ".APP_URL);
            }else{
                $errors['login']['password'] = "La contraseña no es correcta.";
            }
        }else{
            $errors['login']['username'] = "El usuario no es correcto.";
        }
    }

    require_once 'login.view.php';
    ?>