<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Departamento 1</h1>

        <picture>
            <source srcset="build/img/anuncio1.webp" type="image/webp">
            <source srcset="build/img/anuncio1.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/anuncio1.jpg" alt="anuncio">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">$0,000</p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                    <p> 1 </p>
                </li>

                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono cuartos">
                    <p> 2 </p>
                </li>

                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_wifi.svg" alt="icono wifi">
                    <p> Si </p>
                </li>
            </ul>

            <p class="descripcion">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt eligendi libero 
                repellat vero, dicta ea quo voluptatem, natus aut et voluptas iure perspiciatis tempora. 
                Unde magnam aspernatur architecto placeat fuga. Lorem ipsum dolor sit amet consectetur 
                adipisicing elit. Corrupti incidunt fugit similique quaerat doloremque aspernatur eos. 
                Rerum aliquam dolorem accusantium voluptatum delectus? Earum impedit hic atque, 
                magnam voluptate doloribus facere. Lorem ipsum dolor sit amet consectetur adipisicing 
                elit. Cum nihil aspernatur maiores ipsum voluptatem a sequi, esse in dolorem non debitis 
                ratione veritatis, laboriosam illum commodi rerum quisquam culpa exercitationem!</p>
            </p>
        </div>
    </main>

    <footer class="footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion1">
                <a href="index.php">Inicio</a> 
                <a href="renta.php">Rentas</a>
                <a href="contacto.php">Contacto</a>
                <a href="nosotros.php">Nosotros</a>
            </nav>
        </div>

        <p class="copyright">Todos los Derechos Reservados 2023 &copy;</p>
    </footer>

    <script src="build/js/bundle.min.js"></script>
</body>

</html>