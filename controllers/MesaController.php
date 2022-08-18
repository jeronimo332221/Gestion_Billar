<?php

namespace Controllers;

use Model\Articulo;
use Model\Cliente;
use Model\ClienteArticulo;
use MVC\Router;
use Model\Mesa;

class mesaController {
    public static function index( Router $router ) {

        session_start();
        $mesas = Mesa::all();
        $clientes = Cliente::all();
        
        $router->render('mesa/index', [
            "mesas" => $mesas,
            "clientes" => $clientes,
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }
   
     public static function ver(Router $router) {
        session_start();


        if(!is_numeric($_GET['id'])) return;

        $mesa = mesa::find($_GET['id']);
        $clientes = Cliente::all();
        $clienteArticulo = ClienteArticulo::all();
        $articulos = Articulo::all();
       
        
        $clienteV = [];
        $artV = [];
        $alertas = [];
        

        foreach($clientes as $cliente){
            if($mesa->id == $cliente->mesaId) {      
                $clienteV[] = $cliente;        
                
                foreach($clienteArticulo as $clienteA) {
                    if($clienteA->clienteId == $cliente->id){
                        $artV[] = $clienteA;
                 
                       
                    }
                }
            }
        }


        $router->render('mesa/ver', [
            'nombre' => $_SESSION['nombre'],
            'mesa' => $mesa,
            'clienteV' => $clienteV,

            'articulos' => $articulos,
            'artV' => $artV,
            'alertas' => $alertas,
            
        ]);
    }
    public static function clienteArticuloEliminar(){
        session_start();

        $id = $_GET['id'];
        $clienteArticulo = ClienteArticulo::find($id);
        $clienteArticulo->eliminar();
        
        
    }

    public static function clienteArticuloCrear( Router $router ) {

        session_start();
        $clienteArticulo = new ClienteArticulo();
        $alertas = [];
        // if(!is_numeric($_GET['id'])) return;

        // $cliente = Cliente::find($_GET['id']);
      
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
    
            $clienteArticulo->sincronizar($_POST);
          
            $alertas = $clienteArticulo->validar();

            if(empty($alertas)) {
                $clienteArticulo->guardar(); 
                
            }
        }


        
        $router->render('mesa/clienteArticuloCrear', [
           
            'nombre' => $_SESSION['nombre'],
            "alertas" => $alertas,
 
            'id' => $_SESSION['id']
        ]);
    }
}