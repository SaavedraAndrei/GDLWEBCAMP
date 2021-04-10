<?php

require('includes/config/database.php');
try {
    $db = conectarDB();
    $db->set_charset("utf8");
} catch (\Throwable $th) {
    $th->getMessage();
}


$queryEvento = "SELECT evento_id, nombre_evento, fecha_evento, hora_evento, categoria, icono, CONCAT(nombre,' ',apellido) AS invitado FROM eventos 
                INNER JOIN categoria_evento ON eventos.id_cat_evento = categoria_evento.id
                INNER JOIN invitados ON eventos.id_inv = invitados.id";

$resultadoEvento = mysqli_query($db, $queryEvento);



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
        <h2>Calendario de Eventos</h2>
        <?php $calendario = []; ?>
        <?php while ($eventos = mysqli_fetch_assoc($resultadoEvento)) : ?>
            <?php
            // Ordenar por:

            $fecha =  $eventos["fecha_evento"];

            $evento = array(
                'titulo' => $eventos["nombre_evento"],
                'fecha' => $eventos["fecha_evento"],
                'hora' => $eventos["hora_evento"],
                'categoria' => $eventos["categoria"],
                'icono' => $eventos["icono"],
                'invitado' => $eventos["invitado"],
            );

            $calendario[$fecha][] = $evento;


            ?>
        <?php
        endwhile;

        ?>

        <?php foreach ($calendario as $dia => $lista_eventos) : ?>
            <h3 class="calendario-h3">
                <i class="fa fa-calendar"></i>
                <?php
                //UNIX


                setlocale(LC_TIME, 'es_ES.UTF-8');
                //WINDOWS
                setlocale(LC_TIME, 'spanish.UTF-8');


                echo strftime("%A, %d de %B del %Y", strtotime($dia));
                ?>
            </h3>

            <div class="contenido-dias">
                <?php foreach ($lista_eventos as $evento) : ?>

                    <div class="dia">
                        <p class="titulo"><?php echo $evento["titulo"]; ?> </p>
                        <p class="hora">
                            <i class="fa fa-clock" aria-hidden="true"></i>
                            <?php echo $evento["fecha"] . ' ' . $evento["hora"]; ?>
                        </p>
                        <p>
                            <i class="fa fa-university ?> " aria-hidden="true"></i>
                            <?php echo $evento["categoria"] ?>
                        </p>
                        <p>
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <?php echo $evento["invitado"]; ?>
                        </p>
                    </div>
                <?php endforeach; ?>
            </div>

        <?php endforeach; ?>
    </div>

</section>



<?php

mysqli_close($db);
include('includes/templates/footer.php');

// echo '<pre>';
// var_dump();
// echo '</pre>';

?>