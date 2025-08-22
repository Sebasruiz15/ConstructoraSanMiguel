<?php

namespace App;

class Propiedad {
    // Base de Datos
    protected  static $db;
    protected  static $columnasDB = ['id', 'titulo', 'precio', 'imagen', 'descripcion', 'habitaciones', 'wc', 'estacionamiento', 'creado', ' vendedor_id' ];


    // Errores
    protected static $errores = [];


    public $id;
    public $titulo;
    public $imagen;
    public $descripcion;
    public $habitaciones;
    public $wc;
    public $estacionamiento;
    public $creacion;
    public $vendedor_id;


     //    Definir la conexion 
    public static function setDB($databases) {
        self::$db = $databases;
    }

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

    // Sanitizar los datos
    $atributos = $this->sanitizarArtibutos();
    

     // Insertar en la base de datos
        $query = " INSERT INTO propiedades ( ";
        $query .= join(', ', array_keys($atributos)); 
        $query .= " ) VALUES (' "; 
        $query .= join("', '", array_keys($atributos)); 
        $query .= " ') ";

    

       $resultado = self::$db->query($query);
   }

    public function atributos() {
      $atributos = [];
      foreach(self::$columnasDB as $columna){
        if($columna === 'id') continue;
        $atributos[$columna] = $this->$columna;
      }
      return $atributos;
   }

    public function sanitizarArtibutos() {
    $atributos = $this->atributos();

    $sanitizado = [];

    foreach($atributos as $key => $value) {
        $sanitizado[$key] = self::$db->escape_string ($value);
    }
      return $sanitizado;



   }

//    Validación

   public static function getErrres() {
        return self::$errores;
   }

}