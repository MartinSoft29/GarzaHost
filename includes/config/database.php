<?php

function conectarDB() : mysqli {
    $db = mysqli_connect('localhost', 'root', 'Rubensosa040228', 'ayuuda_crud');

    if(!$db) {
        echo "ERROR. No se pudo conectar";
        exit;
    }
    return $db;
}