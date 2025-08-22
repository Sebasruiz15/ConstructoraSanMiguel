<?php

namespace App;

class Propiedad {
    // Base de Datos
    protected  static $db;

    public $id;
    public $titulo;
    public $imagen;
    public $descripcion;
    public $habitaciones;
    public $wc;
    public $estacionamiento;
    public $creacion;
    public $vendedor_id;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? '';
        $this->titulo = $args['titulo'] ?? '';
        $this->imagen = $args['imagen'] ?? '';
        $this->descripcion = $args['descripcion'] ?? '';
        $this->habitaciones = $args['habitaciones'] ?? '';
        $this->wc = $args['wc'] ?? '';
        $this->estacionamiento = $args['estacionamiento'] ?? '';
        $this->creacion = $args['Y/m/d'];
        $this->vendedor_id = $args['vendedor_id'] ?? '';

    }
   public function guardar() {
     

     // Insertar en la base de datos
        $query = " INSERT INTO propiedades (titulo,imagen,  descripcion, habitaciones, wc, estacionamiento, creacion, vendedor_id)
     VALUES ( 
        '$this->titulo','$this->imagen', '$$this->descripcion', '$$this->habitaciones', '$$this->wc', '$$this->estacionamiento','$$this->creacion', '$$this->vendedor_id' ) ";

        self::$db->query($query);
   }

    //    Definir la conexion 
    public static function setDB($databases) {
        self::$db = $databases;
    }

}