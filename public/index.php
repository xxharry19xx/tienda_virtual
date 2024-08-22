<?php 

use Src\Foundation\Application;

$root_dir = dirname(__DIR__);

require $root_dir . '/vendor/autoload.php';

$app = new Application($root_dir);

$app->router->get('/',[\App\Controllers\InicioController::class, 'inicio']);
$app->router->get('/productos',[\App\Controllers\InicioController::class, 'productos']);
$app->router->get('/usuarios',[\App\Controllers\UsuarioController::class, 'registro']);
$app->router->get('/pedidos',[\App\Controllers\PedidoController::class, 'pedidos']);
$app->router->post('/ingresar',['Controlador', 'metodo']);
$app->router->post('/salir',['Controlador', 'metodo']);


$app->run();