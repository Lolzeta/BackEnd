<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conversor de Monedas</title>
</head>
<body>
    <h1><u>Conversor de Monedas</h1></u>
    <form action="" method="post">
        <input type="number" name="cantidad" min="0">
        <select name="moneda1">
            <option value="euro">Euro</option>
            <option value="us">Dolar Estadounidense</option>
            <option value="can">Dolar Canadiense</option>
            <option value="libra">Libra Inglesa</option>
            <option value="yen">YEN</option>
            <option value="rublo">Rublo</option>
            <option value="pesos">Pesos</option>
        </select>

        <select name="moneda2">
            <option value="euro">Euro</option>
            <option value="us">Dolar Estadounidense</option>
            <option value="can">Dolar Canadiense</option>
            <option value="libra">Libra Inglesa</option>
            <option value="yen">YEN</option>
            <option value="rublo">Rublo</option>
            <option value="pesos">Pesos</option>
        </select>

        <input type="submit" name="send" value="Calcular Cambio">
    </form>
</body>
</html>
