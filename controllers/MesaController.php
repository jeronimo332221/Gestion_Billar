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
        foreach ($clientes as $cliente) {

            echo "<br>";
            var_dump($cliente);
            echo "<br>";
            $cumulado = $cliente->cumulado;
        }
        
        $router->render('mesa/index', [
            "mesas" => $mesas,
            "clientes" => $clientes,
            'nombre' => $_SESSION['nombre'],
            "cumulado" => $cumulado ?? 0,
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
        

        $cumTotal = 0;
        foreach($clientes as $cliente){
            if($mesa->id == $cliente->mesaId) {   
                $cumTotal += $cliente->cumulado;  

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
            'cumTotal' => $cumTotal,

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


        header('Location: /mesa');
        
        
        
    }
    public static function cortar(){
        session_start();

        $id = $_GET['id'];
        $mesa = Mesa::find($id);
        


        header('Location: /mesa');
        
        
        
    }

    public static function clienteArticuloCrear( Router $router ) {

        session_start();
        $clienteArticulo = new ClienteArticulo();
    
        $id = $_GET['id'];
        $alertas = [];
        // if(!is_numeric($_GET['id'])) return;
        if(!empty($id)) {
        
            $cliente = Cliente::find($id);
            
          
            $cliente->guardar();
            
        
        }else {
            $cliente = "";
        }
        
        $cumulado = $cliente->cumulado;
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $cumulado += $cliente->cumulado;
            $cliente->cumulado = $cumulado ;

           
           
            
           
            
            
            
            $clienteArticulo->sincronizar($_POST);
            $cliente->sincronizar($_POST);
         
            
            $cliente->guardar();
            $alertas = $clienteArticulo->validar();

            if(empty($alertas)) {
                $clienteArticulo->guardar(); 
                
                
            }
        }



        
        $router->render('mesa/clienteArticuloCrear', [
           
            'nombre' => $_SESSION['nombre'],
            "alertas" => $alertas,
            "cliente" => $cliente,
            "cumulado" => $cumulado ?? 0,
 
            'id' => $_SESSION['id']
        ]);
    }
}