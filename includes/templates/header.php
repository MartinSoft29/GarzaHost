<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garza Host</title>
    <link rel="stylesheet" href="<?php
                                    $directory = getcwd();
                                    $file = 'build/css/app.css';
                                    $exists = file_exists($file);

                                    if ($exists) {
                                        echo $file;
                                    } else {
                                        $file = '../' . $file;
                                        $exists = file_exists($file);
                                        if ($exists) {
                                            echo $file;
                                        } else {
                                            echo '../' . $file;
                                        }
                                    }
                                    ?>">
</head>

<body>

    <header class="header <?php echo $inicio ? 'inicio' : ''; ?>">
        <div class="contenedor contenido-header">
            <div class="barra">

                <a href="index.php">
                    <img class="logo" src="/prueba/build/img/logoGH.svg" alt="Logotipo de GarzaHost">
                </a>

                <!--MENU DE HAMBURGUESA PARA DISPOSITIVOS MOVILES-->
                <div class="mobile-menu">
                    <img src="/prueba/build/img/barras.svg" alt="icono menu">
                </div>

                <!--ENCABEZADO DE NAVEGACION Y BOTON DARKMODE-->
                <div class="derecha">
                    <!--Boton de darkmode-->
                    <img class="dark-mode-boton" src="/prueba/build/img/darkmodeblanca.svg" alt="modo noche">
                    <nav class="navegacion">
                        <a href="index.php">Inicio</a>
                        <a href="renta.php">Rentas</a>
                        <a href="contacto.php">Contacto</a>
                        <a href="nosotros.php">Nosotros</a>
                    </nav>
                </div>

            </div><!--barra-->

            <?php if ($inicio) { ?>
                <h1>Renta de Habitaciones y Departamentos en Tlahuelilpan</h1>
            <?php } ?>
        </div>
    </header>