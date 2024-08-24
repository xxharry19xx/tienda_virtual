<?php 
date_default_timezone_set("America/Lima");

use Src\Foundation\Application;

$root_dir = dirname(__DIR__);

require $root_dir . '/vendor/autoload.php';

$app = new Application($root_dir);

$app->router->get('/',[\App\Controllers\InicioController::class, 'inicio']);
$app->router->get('/productos',[\App\Controllers\InicioController::class, 'productos']);
$app->router->get('/pedidos',[\App\Controllers\InicioController::class, 'pedidos']);
$app->router->get('/principal',[\App\Controllers\InicioController::class, 'principal']);

// RUTA PARA EL USUARIO 

$app->router->get('/admin/usuarios',[\App\Controllers\Admin\UsuarioController::class,'index']);
$app->router->get('/admin/usuarios/search',[\App\Controllers\Admin\UsuarioController::class,'search']);

$app->router->get('/admin/usuarios/create',[\App\Controllers\Admin\UsuarioController::class,'create']);

//rutas Porductos
$app->router->get('/admin/productos',[\App\Controllers\Admin\ProductoController::class,'index']);


$app->run();