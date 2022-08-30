<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\ArticuloController;
use Controllers\CitaController;
use Controllers\LoginController;
use Controllers\ServicioController;
use Controllers\ClienteController;
use Controllers\mesaController;
use MVC\Router;
$router = new Router();

// Iniciar Sesión BIEN
$router->get('/', [LoginController::class, 'login']);
$router->post('/', [LoginController::class, 'login']);
$router->get('/logout', [LoginController::class, 'logout']);

// CLIENTES BIEN
$router->get('/cliente', [ClienteController::class, "index"]);
$router->get('/cliente/crear', [ClienteController::class, "crear"]);
$router->post('/cliente/crear', [ClienteController::class, "crear"]);
$router->get('/cliente/actualizar', [ClienteController::class, "actualizar"]);
$router->post('/cliente/actualizar', [ClienteController::class, "actualizar"]);
$router->post('/cliente/eliminar', [ClienteController::class, "eliminar"]);

//ARTICULOS BIEN
$router->get('/articulo', [ArticuloController::class, "index"]);
$router->get('/articulo/crear', [ArticuloController::class, "crear"]);
$router->post('/articulo/crear', [ArticuloController::class, "crear"]);
$router->get('/articulo/actualizar', [ArticuloController::class, "actualizar"]);
$router->post('/articulo/actualizar', [ArticuloController::class, "actualizar"]);
$router->post('/articulo/eliminar', [ArticuloController::class, "eliminar"]);

$router->get('/mesa', [mesaController::class, "index"]);
$router->get('/mesa/ver', [mesaController::class, "ver"]);  
$router->post('/mesa/eliminar', [mesaController::class, "eliminar"]);
$router->get('/mesa/cortar', [mesaController::class, "cortar"]);
$router->post('/mesa/cortar', [mesaController::class, "cortar"]);
$router->get('/mesa/historial', [mesaController::class, "indexHistorial"]);

$router->get('/clienteArticulo/crear', [mesaController::class, "clienteArticuloCrear"]);
$router->post('/clienteArticulo/crear', [mesaController::class, "clienteArticuloCrear"]);
$router->get('/clienteArticulo/eliminar', [mesaController::class, "clienteArticuloEliminar"]);

// Recuperar Password
$router->get('/olvide', [LoginController::class, 'olvide']);
$router->post('/olvide', [LoginController::class, 'olvide']);
$router->get('/recuperar', [LoginController::class, 'recuperar']);
$router->post('/recuperar', [LoginController::class, 'recuperar']);


$router->comprobarRutas();