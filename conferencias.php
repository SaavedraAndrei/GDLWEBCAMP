<?php

include('includes/templates/header.php');


?>

<section class="seccion-nav">
    <div class="barra">
        <div class="contenedor contenido-barra">
            <div class="derecha">
                <div class="logo">
                    <img src="/build/img/logo.svg" alt="Logo gdlwebcamp">
                </div>

                <div class="menu-movil">
                    <img src="/build/img/barras.svg" alt="Menu Responsive">
                </div>
            </div>


            <nav class="navegacion">
                <a href="#" class="activo">Conferencia</a>
                <a href="#">Calendario</a>
                <a href="#">Invitados</a>
                <a href="#">Reservaciones</a>
            </nav>
        </div>

    </div>
</section>

<section class="seccion">

    <div class="contenido-informacion contenedor">
        <h2>La mejor conferencia de diseño web en español</h2>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni dolor dicta quasi voluptas adipisci cum omnis totam asperiores incidunt, accusantium ipsum id quos nisi! Recusandae modi sint voluptatem natus illo?modi sint voluptatem natus illo?modi sint voluptatem natus illo?modi sint voluptatem natus illo?modi sint voluptatem natus illo?modi sint voluptatem natus illo?</p>
    </div>

</section>

<section class="seccion contenedor">
    <h2>Galería de Fotos</h2>

    <div class="galeria">
        <a href="/build/img/galeria/01.webp" data-lightbox="galeria">
            <img src="/build/img/galeria/thumbs/01.webp" alt="">
        </a>

        <a href="/build/img/galeria/02.webp" data-lightbox="galeria">
            <img src="/build/img/galeria/thumbs/02.webp" alt="">
        </a>

        <a href="/build/img/galeria/03.webp" data-lightbox="galeria">
            <img src="/build/img/galeria/thumbs/03.webp" alt="">
        </a>

        <a href="/build/img/galeria/04.webp" data-lightbox="galeria">
            <img src="/build/img/galeria/thumbs/04.webp" alt="">
        </a>

        <a href="/build/img/galeria/05.webp" data-lightbox="galeria">
            <img src="/build/img/galeria/thumbs/05.webp" alt="">
        </a>

        <a href="/build/img/galeria/06.webp" data-lightbox="galeria">
            <img src="/build/img/galeria/thumbs/06.webp" alt="">
        </a>

        <a href="/build/img/galeria/07.webp" data-lightbox="galeria">
            <img src="/build/img/galeria/thumbs/07.webp" alt="">
        </a>

        <a href="/build/img/galeria/08.webp" data-lightbox="galeria">
            <img src="/build/img/galeria/thumbs/08.webp" alt="">
        </a>

        <a href="/build/img/galeria/09.webp" data-lightbox="galeria">
            <img src="/build/img/galeria/thumbs/09.webp" alt="">
        </a>

        <a href="/build/img/galeria/10.webp" data-lightbox="galeria">
            <img src="/build/img/galeria/thumbs/10.webp" alt="">
        </a>
    </div>
</section>


<footer class="footer">
    <div class="contenedor-footer contenedor">
        <div class="texto-footer">
            <h3>Sobre <span>GDLWEBCAMP</span></h3>
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. In, omnis, unde earum doloribus perspiciatis quis laboriosam, eius nemo commodi incidunt laborum quae molestiae debitis tempore odit neque expedita obcaecati repellendus.
            </p>
        </div>
        <div class="texto-footer">
            <h3>Últimos <span>Tweets</span></h3>
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. In, omnis, unde earum doloribus perspiciatis quis laboriosam, eius nemo commodi incidunt laborum quae molestiae debitis tempore odit neque expedita obcaecati repellendus.
            </p>
        </div>
        <div class="texto-footer">
            <h3>Redes <span>Sociales</span></h3>
            <nav class="redes-sociales">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </nav>
        </div>

    </div>

</footer>
<div class="copyright">
    <p>Todos los derechos reservados GDLWEBCAMP 2021 &copy;</p>
</div>


<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script>
    window.jQuery || document.write('<script src="/build/vendor/jquery-3.4.1.min.js"><\/script>')
</script>
<script src="/build/js/bundle.min.js"></script>

<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
    window.ga = function() {
        ga.q.push(arguments)
    };
    ga.q = [];
    ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto');
    ga('set', 'transport', 'beacon');
    ga('send', 'pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>