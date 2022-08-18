<?php 

namespace Model;

class Cliente extends ActiveRecord {
    // Base de datos
    protected static $tabla = 'clientes';
    protected static $columnasDB = ['id', 'nombre', 'apodo',  "telefono", "cumulado", "mesaId"];

    public $id;
    public $nombre;
    public $apodo;

    public $telefono;
    public $cumulado;
    public $mesaId;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->apodo = $args['apodo'] ?? '';

        $this->telefono = $args['telefono'] ?? '';
        $this->cumulado = $args['cumulado'] ?? 0;
        $this->mesaId = $args['mesaId'] ?? '';
    }

    public function validar() {
        if(!$this->nombre) {
            self::$alertas['error'][] = 'El Nombre del Servicio es Obligatorio';
        }
        if(!$this->apodo) {
            self::$alertas['error'][] = 'El Nombre del Servicio es Obligatorio';
        }
        if(!$this->telefono) {
            self::$alertas['error'][] = 'El Precio del Servicio es Obligatorio';
        }
        if(!is_numeric($this->telefono)) {
            self::$alertas['error'][] = 'El telefono no es válido';
        }
     

        return self::$alertas;
    }
}