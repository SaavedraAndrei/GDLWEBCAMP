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
                <a href="#">Conferencia</a>
                <a href="#">Calendario</a>
                <a href="#">Invitados</a>
                <a href="#">Reservaciones</a>
            </nav>
        </div>

    </div>
</section>

<section class="seccion">

    <div class="contenedor">
        <h2>Registro de Usuarios</h2>

        <form class="registro" action="index.php" method="POST">
            <div class="datos-usuario caja">
                <div class="campo">
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" id="nombre" placeholder="Ingresa tu nombre">
                </div>

                <div class="campo">
                    <label for="apellido">Apellido:</label>
                    <input type="text" name="apellido" id="apellido" placeholder="Ingresa tu apellido">
                </div>

                <div class="campo">
                    <label for="email">E-mail:</label>
                    <input type="email" name="email" id="email" placeholder="Ingresa tu email">
                </div>


            </div>

            <div class="error"></div>

            <div class="paquetes">
                <h3>Elije el número de boletos</h3>

                <section class="precio">
                    <h2>Precios</h2>

                    <div class="contenedor-precios contenedor">
                        <ul class="precio-contenido">
                            <li class="anuncio-precio">
                                <div class="tabla-precio">
                                    <h3>Pase por Día</h3>
                                    <p class="numero">$30</p>

                                    <ul>
                                        <li>Bocadillos Gratis</li>
                                        <li>Todas las conferencias</li>
                                        <li>Todos los talleres</li>
                                    </ul>

                                    <div class="orden">
                                        <label for="pase_dia">Boletos deseados:</label>
                                        <input type="number" name="pase_dia" id="pase_dia" placeholder="0" min="0" value="0">
                                    </div>

                                </div>
                            </li>
                        </ul>

                        <ul>

                            <li class="anuncio-precio">
                                <div class="tabla-precio">
                                    <h3>Todos los Días</h3>
                                    <p class="numero">$50</p>

                                    <ul>
                                        <li>Bocadillos Gratis</li>
                                        <li>Todas las conferencias</li>
                                        <li>Todos los talleres</li>
                                    </ul>

                                    <div class=" orden">
                                        <label for="pase_completo">Boletos deseados:</label>
                                        <input type="number" name="pase_completo" id="pase_completo" placeholder="0" min="0" value="0">
                                    </div>
                                </div>

                            </li>
                        </ul>

                        <ul>
                            <li class="anuncio-precio">
                                <div class="tabla-precio">
                                    <h3>Pase por 2 Días</h3>
                                    <p class="numero">$45</p>

                                    <ul>
                                        <li>Bocadillos Gratis</li>
                                        <li>Todas las conferencias</li>
                                        <li>Todos los talleres</li>
                                    </ul>

                                    <div class=" orden">
                                        <label for="pase_dosdias">Boletos deseados:</label>
                                        <input type="number" name="pase_dosdias" id="pase_dosdias" placeholder="0" min="0" value="0">
                                    </div>
                                </div>

                            </li>

                        </ul>

                    </div>

                </section>
            </div>

            <div id="eventos" class="eventos">
                <h3>Elige tus talleres</h3>
                <div class="caja">
                    <h4>Viernes</h4>
                    <div id="viernes" class="contenido-dia clearfix">

                        <div>
                            <p>Talleres:</p>
                            <label><input type="checkbox" name="registro" id="taller_01" value="taller_01"><time>10:00</time> Responsive Web Design</label>
                            <label><input type="checkbox" name="registro" id="taller_02" value="taller_02"><time>12:00</time> Flexbox</label>
                            <label><input type="checkbox" name="registro" id="taller_03" value="taller_03"><time>14:00</time> HTML5 y CSS3</label>
                            <label><input type="checkbox" name="registro" id="taller_04" value="taller_04"><time>17:00</time> Drupal</label>
                            <label><input type="checkbox" name="registro" id="taller_05" value="taller_05"><time>19:00</time> WordPress</label>
                        </div>
                        <div>
                            <p>Conferencias:</p>
                            <label><input type="checkbox" name="registro" id="conf_01" value="conf_01"><time>10:00</time> Como ser Freelancer</label>
                            <label><input type="checkbox" name="registro" id="conf_02" value="conf_02"><time>17:00</time> Tecnologías del Futuro</label>
                            <label><input type="checkbox" name="registro" id="conf_03" value="conf_03"><time>19:00</time> Seguridad en la Web</label>
                        </div>
                        <div>
                            <p>Seminarios:</p>
                            <label><input type="checkbox" name="registro" id="sem_01" value="sem_01"><time>10:00</time> Diseño UI y UX para móviles</label>
                        </div>
                    </div>
                    <!--#viernes-->
                    <h4>Sábado</h4>
                    <div id="sabado" class="contenido-dia clearfix">

                        <div>
                            <p>Talleres:</p>
                            <label><input type="checkbox" name="registro" id="taller_06" value="taller_06"><time>10:00</time> AngularJS</label>
                            <label><input type="checkbox" name="registro" id="taller_07" value="taller_07"><time>12:00</time> PHP y MySQL</label>
                            <label><input type="checkbox" name="registro" id="taller_08" value="taller_08"><time>14:00</time> JavaScript Avanzado</label>
                            <label><input type="checkbox" name="registro" id="taller_09" value="taller_09"><time>17:00</time> SEO en Google</label>
                            <label><input type="checkbox" name="registro" id="taller_10" value="taller_10"><time>19:00</time> De Photoshop a HTML5 y CSS3</label>
                            <label><input type="checkbox" name="registro" id="taller_11" value="taller_11"><time>21:00</time> PHP Medio y Avanzado</label>
                        </div>
                        <div>
                            <p>Conferencias:</p>
                            <label><input type="checkbox" name="registro" id="conf_04" value="conf_04"><time>10:00</time> Como crear una tienda online que venda millones en pocos días</label>
                            <label><input type="checkbox" name="registro" id="conf_05" value="conf_05"><time>17:00</time> Los mejores lugares para encontrar trabajo</label>
                            <label><input type="checkbox" name="registro" id="conf_06" value="conf_06"><time>19:00</time> Pasos para crear un negocio rentable</label>
                        </div>
                        <div>
                            <p>Seminarios:</p>
                            <label><input type="checkbox" name="registro" id="sem_02" value="sem_02"><time>10:00</time> Aprende a Programar en una mañana</label>
                            <label><input type="checkbox" name="registro" id="sem_03" value="sem_03"><time>17:00</time> Diseño UI y UX para móviles</label>
                        </div>
                    </div>
                    <!--#sabado-->
                    <h4>Domingo</h4>
                    <div id="domingo" class="contenido-dia clearfix">

                        <div>
                            <p>Talleres:</p>
                            <label><input type="checkbox" name="registro" id="taller_12" value="taller_12"><time>10:00</time> Laravel</label>
                            <label><input type="checkbox" name="registro" id="taller_13" value="taller_13"><time>12:00</time> Crea tu propia API</label>
                            <label><input type="checkbox" name="registro" id="taller_14" value="taller_14"><time>14:00</time> JavaScript y jQuery</label>
                            <label><input type="checkbox" name="registro" id="taller_15" value="taller_15"><time>17:00</time> Creando Plantillas para WordPress</label>
                            <label><input type="checkbox" name="registro" id="taller_16" value="taller_16"><time>19:00</time> Tiendas Virtuales en Magento</label>
                        </div>
                        <div>
                            <p>Conferencias:</p>
                            <label><input type="checkbox" name="registro" id="conf_07" value="conf_07"><time>10:00</time> Como hacer Marketing en línea</label>
                            <label><input type="checkbox" name="registro" id="conf_08" value="conf_08"><time>17:00</time> ¿Con que lenguaje debo empezar?</label>
                            <label><input type="checkbox" name="registro" id="conf_09" value="conf_09"><time>19:00</time> Frameworks y librerias Open Source</label>
                        </div>
                        <div>
                            <p>Seminarios:</p>
                            <label><input type="checkbox" name="registro" id="sem_04" value="sem_04"><time>14:00</time> Creando una App en Android en una tarde</label>
                            <label><input type="checkbox" name="registro" id="sem_05" value="sem_05"><time>17:00</time> Creando una App en iOS en una tarde</label>
                        </div>
                    </div>
                    <!--#domingo-->
                </div>
                <!--.caja-->
            </div>
            <!--#eventos-->
            <!--Datos Usuario !-->

            <div class="resumen">
                <h3>Pagos y Extras</h3>

                <div class="caja">
                    <div class="extras">
                        <div class="orden">
                            <label for="camisa_evento">Camisa del Evento $10 <small>(promocion 7% descuento)</small></label>
                            <input type="number" name="camisa_evento" id="camisa_evento" size="3" placeholder="0" min="0" value="0">
                        </div>

                        <div class="orden">
                            <label for="etiquetas">Paquetes de 10 etiquetas $2 <small>(HTML, CSS, JS)</small></label>
                            <input type="number" name="etiquetas" id="etiquetas" size="3" placeholder="0" min="0" value="0">
                        </div>

                        <div class="orden">
                            <label for="regalo">Seleccione un Regalo</label>
                            <select name="regalo" id="regalo" required>
                                <option value="">--Seleccion--</option>
                                <option value="ETI">Etiquetas</option>
                                <option value="PUL">Pulsera</option>
                                <option value="PLU">Pluma</option>
                            </select>
                        </div>

                        <input type="button" id="calcular" class="boton boton-naranja" value="Calcular">
                    </div>

                    <div class="total">
                        <p>Resumen:</p>
                        <div class="lista-productos">

                        </div>
                        <p>Total:</p>
                        <div class="suma-total">

                        </div>
                        <input type="submit" id="btnRegistro" class="boton boton-naranja">
                    </div>
                </div>
            </div>


        </form>


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