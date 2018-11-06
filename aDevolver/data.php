<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cambio.</title>
</head>
<body>
    Importe a pagar:<br/>
    <?=$importe?> €<br/>
    Importe pagado por el cliente:<br/>
    <?=$pagado?> €<br/>
    Importe a devolver:<br/>
    <?=$devolver?> €<br/> 
    <?=billetes($importe)?>
</body>
</html>