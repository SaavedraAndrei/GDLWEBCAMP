<?php

function conectarDB()
{

    $db = mysqli_connect('localhost', 'root', 'root', 'gdlwebcamp');
    if (!$db) {
        echo 'Error en la conexión';
        exit;
    }

    return $db;
}
