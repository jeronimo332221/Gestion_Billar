<?php 

// require __DIR__ . '/../vendor/autoload.php';
// $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
// $dotenv->safeLoad();
require __DIR__ . '/../vendor/autoload.php';

require 'funciones.php';
header('Access-Control-Allow-Origin: *'); 
$h = "localhost";
$us = "root";
$p = "root";
$tabla = "gestion_billar";

$db = mysqli_connect(
    $h, $us, $p, $tabla
);


if (!$db) {
    echo "Error: No se pudo conectar a MySQL.";
    echo "errno de depuración: " . mysqli_connect_errno();
    echo "error de depuración: " . mysqli_connect_error();
    exit;
} 



// Conectarnos a la base de datos
use Model\ActiveRecord;

ActiveRecord::setDB($db);