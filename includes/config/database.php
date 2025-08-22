<?php

function conectarDb() : mysqli {

    $db = new mysqli('localhost', 'root','root','sanmiguel_crud');

    if(!$db) {
        echo "Error de conexión";

        exit;

    }

    return $db;
}