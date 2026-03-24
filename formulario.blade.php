<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>

    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
<body>

<div class="container">
    <h2>Formulario</h2>

    <form action="/procesar" method="POST">
        @csrf

        <label>Nombre:</label>
        <input type="text" name="nombre" required>

        <label>Edad:</label>
        <input type="number" name="edad" required>

        <button type="submit">Enviar</button>
    </form>
</div>

</body>
</html>