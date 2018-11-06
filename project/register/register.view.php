<?php 
require_once '../includes/header.php'
?>
    <div class="container">
        <div class="row justify-content-md-center mt-5 mb-5">
            <div class="col-4">
                <h1>Registro</h1>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" class="form-control <?= (isset($errores['name']))?"is-invalid":"";?>" id="name" aria-describedby="nameHelp" placeholder="Introduce un nombre de usuario" required>
                        <small id="nameHelp" class="form-text text-muted">El nombre con el que te identificaras en la aplicación.</small>
                        <?php if(isset($errores['name'])): ?>
                            <div class="invalid-feedback">
                                <?php foreach($errores['name'] as $message):?>
                                    <li><?=$message?></li>
                                <?php endforeach;?>
                            </div>
                        <?php endif;?>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control <?= (isset($errores['email']))?"is-invalid":"";?>" id="email" name="email" aria-describedby="emailHelp" placeholder="Introduce email" required>
                        <small id="emailHelp" class="form-text text-muted">Prometemos no hacer cosas malas con tu email.</small>
                        <?php if(isset($errores['email'])): ?>
                            <div class="invalid-feedback">
                                <?php foreach($errores['email'] as $message):?>
                                    <li><?=$message?></li>
                                <?php endforeach;?>
                            </div>
                        <?php endif;?>
                    </div>
                    <div class="form-group">
                     <label for="password">Contraseña</label>
                        <input type="password" class="form-control <?= (isset($errores['name']))?"is-invalid":"";?>" id="password" name="password" placeholder="Introduce una contraseña">
                        <?php if(isset($errores['pass'])): ?>
                            <div class="invalid-feedback">
                                <?php foreach($errores['pass'] as $message):?>
                                    <li><?=$message?></li>
                                <?php endforeach;?>
                            </div>
                        <?php endif;?>
                    </div>
                    <div class="form-group">
                     <label for="password_confirmation">Confirmar contraseña</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Introduzca nuevamente su contraseña">
                    </div>
                    <button type="submit" class="btn btn-primary" name="register">Registrarse</button>
                </form>
            </div>
        </div>
    </div>
<?php
require_once '../includes/footer.php'
?>