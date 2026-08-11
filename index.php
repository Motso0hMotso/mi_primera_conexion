<?php
include 'conexion.php';
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>MI PRIMERA CONEXION A BASE DE DATOS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/diseño.css" rel="stylesheet">
    </head>
    <body>
    <h1>MI PRIMERA CONEXION A BASE DE DATOS</h1>
    <br>
    <div class="div1">
        <h5>CONTENEDOR DIV 1</h5>
        <p>Estoy comenzando a rabajar con mi primera conexion a base de datos
        <br>
        Estoy utilizando el editor VSC</p>
    </div>
    <div class="div2">
        <h5>CONTENEDOR DIV 2</h5>
        <p>Aprnderé a utilizar formularios.
            <br>
            Este es un input
            <br>
            <input type="text" id="nombreUsuario" name="usuario" required placeholder="Ingresa tu nombre">
            <br>
        </p>
    </div>
    <div class="div3">
        <h5>CONTENEDOR DIV 3</h5>
                <p>Aprenderé a utilizar formularios.
            <br>
            Este es un button. 
            <br>
            <button type="submit" name="Enviar">Enviar</button>
                </p>
    </div>
    <p>Haz click aquí para <a href="producto.php"> Ir a la gestión de productos</a>.</p>
    </body>
</html>
