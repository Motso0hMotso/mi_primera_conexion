<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar registros a tabla clientes</title>
</head>
<body>
    <header>
        <h1 style="text-align: center;">LA FARMACIA DE NORCOREA</h1>
    </header>
    <nav>
        <a href="index.php">Ir a menú principal</a>
        <br>
        <a href="producto.php">Agregar producto</a>
        <br><br>
    </nav>
    <section>
        <div style="text-align: center;">
            <form action="" method="POST">
                <h2>AGREGAR CLIENTE</h2>

                <!-- CORRECCIÓN: Se añadieron id="nombre_cliente" e id="apellido_cliente" -->
                <label for="nombre_cliente">Ingresa nombre del cliente</label>
                <br>
                <input type="text" name="nombre_cliente" id="nombre_cliente" required placeholder="Escriba aquí el nombre">
                <br><br>

                <label for="apellido_cliente">Ingresa el apellido del cliente</label>
                <br>
                <input type="text" name="apellido_cliente" id="apellido_cliente" required placeholder="Escriba aquí el apellido">
                <br><br>

                <label for="fnaci_cliente">Ingrese la fecha de nacimiento del cliente</label>
                <br>
                <input type="date" name="fnaci_cliente" id="fnaci_cliente" required>
                <br><br>

                <label for="email_cliente">Ingrese el email del cliente</label>
                <br>
                <input type="email" name="email_cliente" id="email_cliente" required placeholder="usuario@example.com">
                <br><br>

                <label for="tel_cliente">Ingrese el numero telefónico del cliente</label>
                <br>
                <input type="number" name="tel_cliente" id="tel_cliente" required placeholder="Digite el número aquí">
                <br><br>

                <button type="submit" name="guardar">Enviar</button>
                <br>
            </form>
        </div>
    </section>
    <footer>
        <div style="text-align: center;">
            <h5>SOMOS TU MEJOR OPCIÓN EN VENTA DE MEDICINA</h5>
            <h6>CONTACTANOS</h6>
            <a href="https://www.facebook.com/" target="_blank" rel="noopener">Nuestra página de Facebook</a>
            <br><br>
            <a href="https://www.instagram.com/" target="_blank" rel="noopener">Nuestra página de Instagram</a>
        </div>
    </footer>
</body>
</html>

<?php
include 'conexion.php';

// CORRECCIÓN: Validar que la conexión con la base de datos exista
if (!$conexion) {
    die("Error al conectar con la base de datos: " . mysqli_connect_error());
}

if (isset($_POST['guardar'])){

    $nombre   = $_POST['nombre_cliente'];
    $apellido = $_POST['apellido_cliente'];
    $fnaci    = $_POST['fnaci_cliente'];
    $email    = $_POST['email_cliente'];
    $tel      = $_POST['tel_cliente'];

    // Consulta SQL con concatenación limpia de datos
    $sql = "INSERT INTO ikdclientes (nombre_cliente, apellido_cliente, fnaci_cliente, email_cliente, tel_cliente)
            VALUES ('" . $nombre . "', '" . $apellido . "', '" . $fnaci . "', '" . $email . "', '" . $tel . "')";

    // CORRECCIÓN: Control de errores de la consulta MySQL
    $resultado = mysqli_query($conexion, $sql);

    if ($resultado) {
        echo "<script>alert('¡Cliente guardado con éxito!');</script>";
    } else {
        echo "<br><b style='color:red;'>Error de MySQL: </b>" . mysqli_error($conexion);
    }
}
?>