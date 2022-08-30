<?php 

namespace Model;

class CorteMesa extends ActiveRecord {
    // Base de datos
    protected static $tabla = 'historialcortes';
    protected static $columnasDB = ['id', 'fecha', 'cumulado', 'cortar_en', 'game'];

    public $id;
    public $fecha;
    public $cumulado;
    public $cortar_en;
    public $game;


    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->fecha = $args['fecha'] ?? null;
        $this->cumulado = $args['cumulado'] ?? null;
        $this->cortar_en = $args['cortar_en'] ?? null;
        $this->game = $args['game'] ?? null;

    }
    public function calcularGastos() {
        if($this->game = 1) {
            var_dump($this->cumulado);
        }
        
        
    }


  }