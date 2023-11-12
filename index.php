<?php
    require 'includes/funciones.php';
    incluirTemplate('header', $inicio = true);
?>

    <main class="titulo contenedor seccion">
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
    </main>

    <!--INICIO SECTION DEPARTAMENTOS-->
    <section class="titulo1 seccion contenedor">
        <h2>Habitaciones y Departamentos en Renta</h2>

        <div class="contenedor-rentas">
            <div class="renta">
                <picture>
                    <source srcset="build/img/anuncio3.webp" type="image/webp">
                    <source srcset="build/img/anuncio3.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/casa1" alt="anuncio">
                </picture>

                <!--LUGARES EN PAGINA PRINCIPAL-->
                <div class="contenido-anuncio">
                    <h3>Casa 1</h3>
                    <p>aqui va la descripcion del lugar</p>
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

                    <div>
                        <a class="ubicacion" href="https://maps.app.goo.gl/eGkqR4tg4QcRsdGE7" target="_blank">
                            Ver ubicación en Google Maps</a>
                    </div>

                    <a href="departamento.html" class="boton-amarillo-block">
                        Ver propiedad
                    </a>

                </div> <!-- FIN LUGARES EN PAGINA PRINCIPAL-->

            </div><!--renta-->

            <div class="renta">
                <picture>
                    <source srcset="build/img/casa2-fachada.webp" type="image/webp">
                    <source srcset="build/img/casa2-fachada.png" type="image/png">
                    <img loading="lazy" src="build/img/casa2-fachada.webp" alt="anuncio">
                </picture>

                <!--LUGARES EN PAGINA PRINCIPAL-->
                <div class="contenido-anuncio">
                    <h3>Casa 2</h3>
                    <p>aqui va la descripcion del lugar</p>
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

                    <div>
                        <a class="ubicacion" href="https://maps.app.goo.gl/eGkqR4tg4QcRsdGE7" target="_blank">Ver
                            ubicación en Google Maps</a>
                    </div>

                    <a href="departamento.html" class="boton-amarillo-block">
                        Ver propiedad
                    </a>

                </div> <!-- FIN LUGARES EN PAGINA PRINCIPAL-->

            </div><!--renta-->

            <div class="renta">
                <picture>
                    <source srcset="build/img/casa3fachada.webp" type="image/webp">
                    <source srcset="build/img/casa3fachada.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/casa3fachada.jpg" alt="anuncio">
                </picture>

                <!--LUGARES EN PAGINA PRINCIPAL-->
                <div class="contenido-anuncio">
                    <h3>Casa 3</h3>
                    <p>aqui va la descripcion del lugar</p>
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

                    <div>
                        <a class="ubicacion" href="https://maps.app.goo.gl/eGkqR4tg4QcRsdGE7" target="_blank">Ver
                            ubicación en Google Maps</a>
                    </div>


                    <a href="departamento.html" class="boton-amarillo-block">
                        Ver propiedad
                    </a>

                </div> <!-- FIN LUGARES EN PAGINA PRINCIPAL-->

            </div><!--renta-->

        </div><!--contenedor rentas-->

        <div class="alinear-derecha">
            <a href="renta.html" class="boton-verde">Ver Todo</a>
        </div>

    </section><!--FIN SECTION DE DEPARTAMENTOS-->

    <section class="imagen-contacto">
        <h2>Contactanos</h2>
        <p>Llena el siguiente formulario para estar en contacto con usted</p>
        <a href="contacto.php" class="boton-amarillo">Contactános</a>
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