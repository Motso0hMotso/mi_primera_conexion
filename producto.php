<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Guardar registros</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <h2>AGREGAR PRODUCTO AL INVENTARIO</h2>
    <br>
    <br>
    <form action="" method="post">
    <label for="">Ingresa el nombre del producto</label>
    <br>
    <input type="text" name="nombre_prod" required placeholder="Escriba el nombre del producto">
    <br> 
    <br>
    <label for="">Categoria</label>
    <br>
    <input type="text" name ="cat_prod" required placeholder="Escriba la categoria">
    <br>
    <br>
    <label for="">Precio</label>
    <br>
    <input type="number" name ="precio_prod" step="0.01"required placeholder="Digite el precio">
    <br>
    <br>
    <button type="submit" name="guardar">Guardar Producto</button>
    </form>
    </body>
</html>
<?php
include 'conexion.php';

if (isset($_POST['guardar'])) {
    $nombre = $_POST['nombre_prod'];
    $cat = $_POST['cat_prod'];
    $precio = $_POST['precio_prod'];

    $sql= "INSERT INTO productos(nombre_prod, cat_prod, precio_prod)
            VALUES ('$nombre','$cat','$precio')";
    
            mysqli_query($conexion , $sql);
}
?>