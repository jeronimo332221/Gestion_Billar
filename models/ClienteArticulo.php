<?php 

namespace Model;

class ClienteArticulo extends ActiveRecord {
    // Base de datos
    protected static $tabla = 'clientearticulo';
    protected static $columnasDB = ['id', 'clienteId', 'articuloId'];

    public $id;
    public $clienteId;
    public $articuloId;


    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->clienteId = $args['clienteId'] ?? null;
        $this->articuloId = $args['articuloId'] ?? null;

    }


  }