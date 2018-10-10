<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Validando</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>Validacion formularios con PHP</h1>
    <form action="" method="post">

    <label for="nombre">Nombre: </label>
    <input type="text" name="nombre" pattern="[a-zA-Z áéíóú]+" required><br /><br />

    <label for="apellidos">Apellidos: </label>
    <input type="text" name="apellidos" pattern="[a-zA-Z áéíóú]+" required><br /><br />

    <label for="edad">Edad: </label>
    <input type="number" name="edad" required><br /><br />

    <label for="email">Email: </label>
    <input type="email" name="email" required><br /><br />

    <label for="sexo" required>Sexo: </label>
    <select type="text" name="sexo" id="">
        <option value="-" selected>Sexo</option>
        <option value="M">Mujer</option>
        <option value="H">Hombre</option>
    </select><br /><br />
    <label for="extranjero">Extranjero: </label>
    <input type="checkbox" name="extranjero" value="1"><br /><br />

    <input type="submit" value="Enviar" name="form_alta">
</body>
</html>