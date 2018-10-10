<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Calculadora DNI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>Calculadora de la letra del D.N.I</h1><br><br>
    <p>Introduce el número de DNI, y pulsa "calcular" para obtener la letra que le corresponde.
        Para calcular la letra del N.I.E. no introduzcas la letra X, Y o Z de delante.</p><br><br>

    <form action="" method="post">
    <label for="dni">Número:</label>
    <input type="text" name="dni" value="<?=$dni?>">
    <input type="submit" name="Calcular"><br><br>
    <label for="estado">Estado:</label>
    <input type="text" name="estado" value="<?=$estado?>" disabled="disabled" size="40"><br><br>
    <label for="letra">Letra</label><br>
    <input type="text" name="letra" value="<?=$letra?>" disabled="disabled" size="2">
</body>
</html>