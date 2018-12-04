<?php
    require_once '../setup.php';
    require_once '../includes/header.php'; 
    require_once '../includes/functions.php'
?>
<div class="container">
    <div class="offset-3 col-6 pt-4 pb-4">
        <form action="" method="POST" novalidate>
        <div class="form-group">
                <label for="username">Nombre de usuario</label>
                <input type="text" class="form-control <?=($errors['username'])?"is-invalid":""?>" id="username" name="username" aria-describedby="usernameHelp" placeholder="Introduce un nombre de usuario" value="<?=($username??'')?>">
                <small id="usernameHelp" class="form-text text-muted">Debe tener como mínimo 8 caracteres con números y letras minúsculas.</small>
                <?php invalidFeedbackDiv('username')?>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control <?=($errors['password'])?"is-invalid":""?>" id="password" name="password" aria-describedby="passwordHelp" placeholder="Password">
                <small id="passwordHelp" class="form-text text-muted">Debe tener 6 caracteres como mínimo</small>
                <?php invalidFeedbackDiv('password')?>
            </div>
            <?php validationDiv('login')?>

            <button type="submit" name="login" class="btn btn-primary">Login</button>
        </form>
    </div>
</div>
<?php require_once '../includes/footer.php'; ?>

