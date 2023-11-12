<?php
//Base de Datos
require '../../includes/config/database.php';
$db = conectarDB();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "<pre>";
    var_dump($_POST);
    echo "</pre";

    $titulo = $_POST['titulo'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];
    $habitaciones = $_POST['habitaciones'];
    $wc = $_POST['wc'];
    //$wifi = $_POST['wifi'];
    $vendedorId = $_POST['vendedores_id'];

    //Insertar base de datos
    $query = "INSERT INTO propiedades (titulo, precio, descripcion, habitaciones, wc, estacionamiento, vendedores_id) VALUES ('$titulo', '$precio', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$vendedorId')";

    echo $query;
}


require '../../includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion">
    <h1>crear</h1>

    <a href="/prueba/admin/index.php" class="boton boton-verde">volver</a>

    <form class="formulario" method="POST" action="/prueba/admin/propiedades/crear.php">
        <fieldset>
            <legend>Informacion General</legend>

            <label for="titulo">Titulo:</label>
            <input type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad">

            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" placeholder="Precio Propiedad">

            <label for="imagen">Imagen:</label>
            <input type="file" id="imagen" accept="image/jpeg, image/png, image/jpg">

            <label for="descripcion">Descripcion:</label>
            <textarea id="descripcion" name="descripcion"></textarea>
        </fieldset>

        <fieldset>
            <legend>Informacion de la Propiedad</legend>

            <label for="habitaciones">Habitaciones:</label>
            <input type="number" id="habitaciones" name="habitaciones" placeholder="Ej: 3" min="1" max="20">

            <label for="wc">Baños:</label>
            <input type="number" id="wc" name="wc" placeholder="Ej: 3" min="1" max="20">


            <!--<div class="forma-contacto">
                <label for="wifi">WiFi</label>
                <input name="wifi" type="radio" value="si" id="wifi"> Sí
                <input name="wifi" type="radio" value="no" id="wifi"> No
            </div>
-->
        </fieldset>

        <fieldset>
            <legend>Vendedor</legend>

            <select name="vendedores_id">
                <option value="1">Juan</option>
                <option value="2">Karen</option>
            </select>
        </fieldset>

        <input type="submit" name="Crear Propiedad" class="boton boton-verde">

    </form>
</main>

<footer class="footer seccion">
    <div class="contenedor contenedor-footer">
        <nav class="navegacion1">
            <a href="index.html">Inicio</a>
            <a href="renta.html">Rentas</a>
            <a href="contacto.html">Contacto</a>
            <a href="nosotros.html">Nosotros</a>
        </nav>
    </div>

    <p class="copyright">Todos los Derechos Reservados 2023 &copy;</p>
</footer>

<script src="/build/js/bundle.min.js"></script>
</body>

</html>