<?php 

namespace Model;

class Articulo extends ActiveRecord {
    // Base de datos
    protected static $tabla = 'articulos';
    protected static $columnasDB = ['id', 'nombre', 'rubro', 'stockMin',
     "precio", "fechaRepo", "fechaRepoCocina", "stockCocina", "existencia","acumVend", "fraccion", "cantRep"];

    public $id;
    public $nombre;
    public $rubro;
    public $stockMin;
    public $precio;
    public $fechaRepo;
    public $fechaRepoCocina;
    public $stockCocina;
    public $existencia;
    public $acumVend;
    public $fraccion;
    public $cantRep;


    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->rubro = $args['rubro'] ?? '';
        $this->stockMin = $args['stockMin'] ?? '';
        $this->precio = $args['precio'] ?? '';
        $this->fechaRepo = $args['fechaRepo'] ?? 0;
        $this->fechaRepoCocina = $args['fechaRepoCocina'] ?? '';
        $this->stockCocina = $args['stockCocina'] ?? '';
        $this->existencia = $args['existencia'] ?? '';
        $this->acumVend = $args['acumVend'] ?? '';
        $this->fraccion = $args['fraccion'] ?? '';
        $this->cantRep = $args['cantRep'] ?? '';
    }

    public function mostrarAlerta($para) {
        self::$alertas['exito'][] = $para;
    }

    // public function validar() {
    //     if(!$this->nombre) {
    //         self::$alertas['error'][] = 'El Nombre del Servicio es Obligatorio';
    //     }
    //     if(!$this->apodo) {
    //         self::$alertas['error'][] = 'El Nombre del Servicio es Obligatorio';
    //     }
    //     if(!$this->domicilio) {
    //         self::$alertas['error'][] = 'El Nombre del Servicio es Obligatorio';
    //     }
    //     if(!$this->telefono) {
    //         self::$alertas['error'][] = 'El Precio del Servicio es Obligatorio';
    //     }
    //     if(!is_numeric($this->telefono)) {
    //         self::$alertas['error'][] = 'El telefono no es válido';
    //     }
     

    //     return self::$alertas;
    // }
}