<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="CSSError.css" />
    <title>Error page</title>
</head>
<body>
    <h1>Recargue la pagina solucionando los siguientes errores, por favor.</h1>
    <?php if(isset($error['importe'])): ?>
        <div class="error">
            <p>Errores en el importe</p>
                <ul>
                    <?php foreach($error['importe'] as $message):?>
                        <li><?=$message?></li>
                    <?php endforeach;?>
        </div>
    <?php endif; ?>

    <?php if(isset($error['pagado'])): ?>
        <div class="error">
            <p>Errores en el a pagar</p>
                <ul>
                    <?php foreach($error['pagado'] as $message):?>
                        <li><?=$message?></li>
                    <?php endforeach;?>
        </div>
    <?php endif; ?>
</body>
</html>