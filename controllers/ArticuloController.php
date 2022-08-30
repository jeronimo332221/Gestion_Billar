<?php

namespace Controllers;

use MVC\Router;
use Model\Articulo;

class ArticuloController {
    public static function index( Router $router ) {

        session_start();
        $articulos = Articulo::all();
        $alertas = [];
        
        foreach($articulos as $art) {
            $art->validarValores();
        }
        $alertas = Articulo::getAlertas();

        


        $router->render('articulo/index', [
        
            "articulos" => $articulos,
            "alertas" => $alertas,
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);
    }
    public static function crear( Router $router ) {

        session_start();

        $articulo = new articulo;
        $alertas = [];
      
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
    
            $articulo->sincronizar($_POST);
          
            $alertas = $articulo->validar();

            if(empty($alertas)) {
                $articulo->guardar(); 
                // $articulo->mostrarAlerta("ecito");
              
                
            }
        }


        $router->render('articulo/crear', [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id'],
            "alertas" => $alertas
        ]);
    }
     public static function actualizar(Router $router) {
        session_start();


        if(!is_numeric($_GET['id'])) return;

        $articulo = articulo::find($_GET['id']);
        $alertas = [];

        
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $articulo->sincronizar($_POST);

            $alertas = $articulo->validar();

            if(empty($alertas)) {
                $articulo->guardar();
                header('Location: /articulo');
            }
        }

        $router->render('articulo/actualizar', [
            'nombre' => $_SESSION['nombre'],
            'articulo' => $articulo,
            'alertas' => $alertas
        ]);
    }
    public static function eliminar(){
        session_start();

         if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $articulo = articulo::find($id);
            $articulo->eliminar();
            header('Location: /articulo');
        }
    }
}