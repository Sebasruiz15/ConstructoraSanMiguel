<?php

define('TEMPLATES_URL', __DIR__ . '/templates');
define('FUNCIONES_URL', __DIR__ . '/funciones.php');

function incluirTemplate( $nombre,$inicio = false ){

    include TEMPLATES_URL . "/$nombre.php";  
}

function estaAutenticado() {
    session_start();

    if(!$_SESSION['login']){
      header('Location: /');

    }
}

function debuguear($varible) {
    echo "<pre>";
    var_dump($varible);
    echo"</pre>";
    exit;

}