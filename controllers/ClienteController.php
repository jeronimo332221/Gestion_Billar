<?php

namespace Controllers;

use MVC\Router;
use Model\Cliente;

class ClienteController {
    public static function index( Router $router ) {

        session_start();
        $clientes = Cliente::all();

        


        $router->render('cliente/index', [
        
            "clientes" => $clientes,
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }
    public static function crear( Router $router ) {

        session_start();

        $cliente = new Cliente;
        $alertas = [];
      
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
    
            $cliente->sincronizar($_POST);
          
            $alertas = $cliente->validar();

            if(empty($alertas)) {
                $cliente->guardar(); 
              
                header('Location: /cliente');
            }
        }


        $router->render('cliente/crear', [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id'],
            "alertas" => $alertas
        ]);
    }
     public static function actualizar(Router $router) {
        session_start();


        if(!is_numeric($_GET['id'])) return;

        $cliente = Cliente::find($_GET['id']);
        $alertas = [];

        
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $cliente->sincronizar($_POST);

            $alertas = $cliente->validar();

            if(empty($alertas)) {
                $cliente->guardar();
                header('Location: /cliente');
            }
        }

        $router->render('cliente/actualizar', [
            'nombre' => $_SESSION['nombre'],
            'cliente' => $cliente,
            'alertas' => $alertas
        ]);
    }
    public static function eliminar(){
        session_start();

         if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $cliente = Cliente::find($id);
            $cliente->eliminar();
            header('Location: /cliente');
        }
    }
}