<?php 

namespace Model;

class Mesa extends ActiveRecord {
    // Base de datos
    protected static $tabla = 'mesas';
    protected static $columnasDB = ['id', 'billar_type'];

    public $id;
    public $billar_type;


    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->billar_type = $args['billar_type'] ?? '0';

    }


}