<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>¿Quienes Somos?</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/destacada.webp" type="image/webp">
                    <source srcset="build/img/destacada.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/destacada.jpg" alt="img nosotros">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>
                    Descubre Tu Próximo Hogar en Tlahuelilpan con Nosotros
                </blockquote>

                <p>Bienvenidos a Garza Host, una plataforma digital dedicada a simplificar y mejorar la experiencia
                    de búsqueda y renta de alojamientos en Tlahuelilpan. Somos un equipo comprometido 
                    con la creación de una solución eficiente para propietarios y buscadores de propiedades
                    en esta región.
                </p>

                <h3>Nuestra Misión:</h3>
                <p>
                    Facilitar el proceso de conexión entre propietarios de alojamientos y aquellos que buscan 
                    un hogar temporal en Tlahuelilpan. Nos esforzamos por crear una plataforma intuitiva que 
                    promueva la transparencia, la eficiencia y la satisfacción de nuestros usuarios.
                </p>
            </div>

        </div>
    </main>

    <section class="contenedor seccion">
        <h1>Sobre Nosotros</h1>
        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono2.svg" alt="icono precio" loading="lazy">
                <h3>Precio</h3>
                <p>
                    Descubre diversas opciones de alojamiento en nuestra web, con precios que se adaptan a distintos
                    presupuestos. Facilitamos la búsqueda al proporcionar un panorama completo, desde opciones
                    económicas hasta más exclusivas. Con información detallada sobre tarifas y comodidades, nuestra
                    plataforma garantiza transparencia para decisiones informadas. Ya sea una opción asequible o con
                    comodidades adicionales, nuestra web está diseñada para encontrar la mejor vivienda al precio
                    adecuado, simplificando tu búsqueda y ajustándose a tu bolsillo.
                </p>
            </div>

            <div class="icono">
                <img src="build/img/icono3.svg" alt="icono tiempo" loading="lazy">
                <h3>Tiempo</h3>
                <p>
                    La web de alojamiento en Tlahuelilpan ofrece una solución eficiente para la búsqueda de
                    departamentos. Los usuarios exploran opciones desde sus dispositivos, eliminando la necesidad
                    de desplazarse físicamente. La búsqueda avanzada y detalles como ubicación y precios agilizan
                    la selección. Ver descripciones, imágenes y reseñas facilita la toma de decisiones. En resumen,
                    la página no solo simplifica la búsqueda de alojamiento, sino que también optimiza el tiempo,
                    ofreciendo una experiencia conveniente y eficaz en Tlahuelilpan.
                </p>
            </div>
        </div>
    </section>

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