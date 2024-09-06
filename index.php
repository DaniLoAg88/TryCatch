<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Try-Catch</title>
    <script src="js/index.js"></script>
</head>
<body>
    <h2>Try-Catch</h2>
    <form action="lectura1.php">
        <p>
            <label for="num1">Ingresa el primer número</label>
            <input type="number" id="num1" name="num1">
        </p>
        <p>
            <label for="num2">Ingresa el segundo número</label>
            <input type="number" id="num2" name="num2">
        </p>
        <p>
<!--            Cambiar el estado del submit dependiendo si acepta las políticas de privacidad-->
            <input type="checkbox" id="check">Acepta las <a href="http://agpd.es">Políticas de privacidad</a>
        </p>
        <input type="submit" value="Calcular" id="enviar" disabled>
    </form>
</body>
</html>