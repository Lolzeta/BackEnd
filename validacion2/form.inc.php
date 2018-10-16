<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de ejemplo</title>
    <style>
    .form_element{
        margin:5px;
    }
    .error {
        margin: 10px;
        border: solid red;
        color: red;
    }
    </style>
</head>
<body>
    <h1>Formulario</h1>
    <form action="" method="post" novalidate> <!-- Para que no furule la validación -->
        <div class="form_element">
            <label for="name">Nombre</label>
            <input type="text" name="name">
            <!-- Errores de validacion del nombre -->
            <?php if(isset($error['name'])): ?>
                <div class="error">
                    <p>Errores de validación en el nombre</p>
                    <ul>
                    <?php foreach($error['name'] as $message):?>
                        <li><?=$message?></li>
                    <?php endforeach;?>
                </div>
            <?php endif; ?>
        </div>
        <div class="form_element">
            <label for="surnames">Apellidos</label>
            <input type="text" name="surnames">
            <?php if(isset($error['surnames'])): ?>
                <div class="error">
                    <p>Errores de validación en los apellidos</p>
                    <ul>
                    <?php foreach($error['surnames'] as $message):?>
                        <li><?=$message?></li>
                    <?php endforeach;?>
                </div>
            <?php endif; ?>
        </div>
        <div class="form_element">
            <label for="age">Edad</label>
            <input type="number" name="age">
            <?php if(isset($error['age'])): ?>
                <div class="error">
                    <p>Errores de validación en la edad</p>
                    <ul>
                    <?php foreach($error['age'] as $message):?>
                        <li><?=$message?></li>
                    <?php endforeach;?>
                </div>
            <?php endif; ?>
        </div>
        <div class="form_element">
            <label for="email">Email</label>
            <input type="email" name="email">
            <?php if(isset($error['email'])): ?>
                <div class="error">
                    <p>Errores de validación en el email</p>
                    <ul>
                    <?php foreach($error['email'] as $message):?>
                        <li><?=$message?></li>
                    <?php endforeach;?>
                </div>
            <?php endif; ?>
        </div>
        <div class="form_element">
            <label for="pass">Contraseña</label>
            <input type="password" name="pass">
            <?php if(isset($error['pass'])): ?>
                <div class="error">
                    <p>Errores de validación en la contraseña</p>
                    <ul>
                    <?php foreach($error['pass'] as $message):?>
                        <li><?=$message?></li>
                    <?php endforeach;?>
                </div>
            <?php endif; ?>
        </div>
        <div class="form_element">
            <input type="submit" name="send" value="Dar de alta">
        </div>
    </form>
</body>
</html>