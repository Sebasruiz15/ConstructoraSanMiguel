<?php

function conectarDb() : mysqli {

    $db = mysqli_connect('localhost', 'root','root','sanmiguel_crud');

    if(!$db) {
        echo "Error de conexión";

        exit;

    }

    return $db;
}