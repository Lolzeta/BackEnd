<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="CSSGeneral.css" />
</head>
<body>
    <h1><u>Login</h1></u>
    <div class="separador">
        <form action="" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" required>
        <?php if(isset($error['username'])): ?>
                <div class="error">
                    <p>Errores en el campo "Username"</p>
                    <ul>
                    <?php foreach($error['username'] as $message):?>
                        <li><?=$message?></li>
                    <?php endforeach;?>
                </div>
            <?php endif; ?>
    </div>
    <div class="separador">
        <label for="pass">Password:</label>
        <input type="password" name="pass" required>
        <?php if(isset($error['pass'])): ?>
                <div class="error">
                    <p>Errores en el campo "Password"</p>
                    <ul>
                    <?php foreach($error['pass'] as $message):?>
                        <li><?=$message?></li>
                    <?php endforeach;?>
                </div>
            <?php endif; ?>
    </div>
    <div class="separador">
        <input type="submit" name="send" value="Login">
    </div>
</body>
</html>